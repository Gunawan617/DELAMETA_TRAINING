#include <NewPing.h>
#include <SPI.h>
#include <Ethernet.h>
#include <ArduinoJson.h> //6.17.3
#include <Servo.h>


// replace the MAC address below by the MAC address printed on a sticker on the Arduino Shield 2
byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };
IPAddress ip(192, 168, 0, 10);

EthernetClient client;
int triger  =2;
int echo    =3;
int batas   =200; //Maksimal 400 cm
int led1=7;
int led2=6;
//int led3=4;
int ldr=A0;
int sensorFlame=A1;
int outServo   = 4;

int    HTTP_PORT   = 80;
String HTTP_METHOD = "GET";
char   HOST_NAME[] = "192.168.83.91"; // change to your PC's IP address
String PATH_NAME   = "/error/theme/data-api.php";
String getData;
NewPing cm(triger,echo,batas);
Servo myservo;

void setup() {
//START IP DHCP
  pinMode(led1,OUTPUT);
  pinMode(led2,OUTPUT);
 // pinMode(led3,OUTPUT);
  pinMode(ldr,INPUT);
  pinMode(sensorFlame,INPUT);
  myservo.attach(outServo);
  Serial.begin(115200);
   myservo.write(0);
  Serial.println("Konfigurasi DHCP, Silahkan Tunggu!");
  if (Ethernet.begin(mac) == 0) {
    Serial.println("DHCP Gagal!");
    if (Ethernet.hardwareStatus() == EthernetNoHardware) {
      Serial.println("Ethernet Tidak tereteksi :(");
    } else if (Ethernet.linkStatus() == LinkOFF) {
      Serial.println("Hubungkan kabel Ethernet!");
    }
    while (true) {delay(1);}
  }  
  //End DHCP
  Serial.println("Menghubungkan");
  client.connect(HOST_NAME, HTTP_PORT);
  Serial.println("Ready");
}

void loop() {
  //Baca data
  int bacaJarak=cm.ping_cm();
  int bacaLDR=analogRead(ldr);
  int bacaFlame=analogRead(sensorFlame);
      bacaFlame=map(bacaFlame,20,955,100,0);
  String namadevice="entus";
  int sensor1=(bacaJarak);
  int sensor2=(bacaLDR);
  int sensor3=(bacaFlame);
  //int sensor2=random(20.100);
  
  
// make a HTTP request:
    // send HTTP header
    client.connect(HOST_NAME, HTTP_PORT);
    client.println(HTTP_METHOD + " " + PATH_NAME + 
                   "?namadevice=" + String(namadevice) + 
                   "&sensor1=" + String(sensor1) + 
                   "&sensor2=" + String(sensor2) + 
                   "&sensor3=" + String(sensor3) + 
                    "&led1=" + String("") + 
                   " HTTP/1.1");
    client.println("Host: " + String(HOST_NAME));
    client.println("Connection: close");
    client.println(); // end HTTP header
    
    while(client.connected()) {
      if(client.available()){
        char endOfHeaders[] = "\r\n\r\n";
        client.find(endOfHeaders);
        getData = client.readString();
        getData.trim();
        Serial.println(getData);

        //AMBIL DATA JSON
        const size_t capacity = JSON_OBJECT_SIZE(9) + 140; //cari dulu nilainya pakai Arduino Json 5 Asisten
        DynamicJsonDocument doc(capacity);
        //StaticJsonDocument<192> doc;
        DeserializationError error = deserializeJson(doc, getData);
      
        const char* waktu_dibaca      = doc["waktu"]; // "2021-10-12 09:18:55"
        const char* namadevice_dibaca = doc["namadevice"]; // "iwancilibur"
        const char* sensor1_dibaca    = doc["sensor1"]; // "44"
        const char* sensor2_dibaca    = doc["sensor2"]; // "40"
        const char* sensor3_dibaca    = doc["sensor3"]; // "40"
        const char* control1_dibaca   = doc["control1"]; // "0"
        const char* control2_dibaca   = doc["control2"]; // "0"
        const char* control3_dibaca   = doc["control3"]; // "0"
        const char* led1_dibaca   = doc["led1"]; // "0"
        
       //POST TO SERIAL
       Serial.print("Waktu      = ");Serial.println(waktu_dibaca);
       Serial.print("Nama Device= ");Serial.println(namadevice_dibaca);
       Serial.print("Sensor 1   = ");Serial.println(sensor1_dibaca);
       Serial.print("Sensor 2   = ");Serial.println(sensor2_dibaca);
       Serial.print("Sensor 3   = ");Serial.println(sensor3_dibaca);
       Serial.print("Control 1  = ");Serial.println(control1_dibaca);
       Serial.print("Control 2  = ");Serial.println(control2_dibaca);
       Serial.print("Control 3  = ");Serial.println(control3_dibaca);
       Serial.println();
      
       //LOGIKA
       if(String(control1_dibaca)=="1"){
        Serial.println("CONTROL 1 ON");
        digitalWrite(led1,HIGH);
       }
        if(String(control1_dibaca)=="0"){
        Serial.println("CONTROL 1 OFF");
        digitalWrite(led1,LOW);
       }
       if(String(control2_dibaca)=="1"){
        Serial.println("CONTROL 2 ON");
        digitalWrite(led2,HIGH);
       }
       if(String(control2_dibaca)=="0"){
        Serial.println("CONTROL 2 OFF");
        digitalWrite(led2,LOW);
       }
        if(String(control3_dibaca)=="1"){
        Serial.println("CONTROL 3 ON");
        //digitalWrite(led3,HIGH);
         myservo.write(90);
       }if(String(control3_dibaca)=="0"){
        Serial.println("CONTROL 3 OFF");
        //digitalWrite(led3,LOW);
        myservo.write(0);
       }
      }
      
      
    }
    delay(1000);
}
