#include <NewPing.h>

#include <Ethernet.h>
#include <MQTTPubSubClient.h>
int triger  =2;
int echo    =3;
int batas   =200; //Maksimal 400 cm
int led1=7;
int led2=6;
int ldr=A0;

NewPing cm(triger,echo,batas);

uint8_t mac[] = {0xAB, 0xCD, 0xEF, 0x01, 0x23, 0x45};
//const IPAddress ip(192, 168, 0, 201);

EthernetClient client;
MQTTPubSubClient mqtt;

void setup() {
  pinMode(led1,OUTPUT);
  pinMode(led2,OUTPUT);
  pinMode(ldr,INPUT);
    Serial.begin(115200);
    //START IP DHCP
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

    Serial.print("connecting to host...");
    while (!client.connect("192.168.133.240", 1883)) {
        Serial.print(".");
        delay(1000);
    }
    Serial.println(" connected!");

    // initialize mqtt client
    mqtt.begin(client);

    Serial.print("connecting to mqtt broker...");
    while (!mqtt.connect("arduino", "public", "public")) {
        Serial.print(".");
        delay(1000);
    }
    Serial.println(" connected!");

    // subscribe callback which is called when every packet has come
    mqtt.subscribe([](const String& topic, const String& payload, const size_t size) {
        Serial.println("mqtt received: " + topic + " - " + payload);
    });

    // KONTROL
    mqtt.subscribe("lampu1", [](const String& payload, const size_t size) {
        Serial.print("Perintah: ");
        Serial.println(payload);
        if(payload == "1"){
          digitalWrite(led1,HIGH);
          Serial.println("ON 1");
        }
        if(payload == "0"){
          digitalWrite(led1,LOW);
          Serial.println("OFF 1");
        }
    });

    mqtt.subscribe("lampu2", [](const String& payload, const size_t size) {
        Serial.print("Perintah: ");
        Serial.println(payload);
        if(payload == "1"){
              digitalWrite(led2,HIGH);
          Serial.println("ON 2");
        }
        if(payload == "0"){
              digitalWrite(led2,LOW);
          Serial.println("OFF 2");
        }
    });
}

void loop() {
  
    mqtt.update();  // should be called
    int bacaJarak=cm.ping_cm();
    int bacaLDR=analogRead(ldr);
    // publish message
    static uint32_t prev_ms = millis();
    if (millis() > prev_ms + 1000) {
        prev_ms = millis();
        mqtt.publish("ldr", String(bacaLDR).c_str());
        mqtt.publish("jarak", String(bacaJarak).c_str());
        delay(1000);
    }
    
}
