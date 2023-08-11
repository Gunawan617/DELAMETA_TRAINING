#include <LiquidCrystal_I2C.h>
#include <SPI.h>
#include <MFRC522.h>
#include <Servo.h>
#include<NewPing.h>
#define SS_PIN 10
#define RST_PIN 9


int buzzerPin =6;
int triger =3;
int echo =2;
int batas =200; //Maksimal 400 cm
int kunci1;


//unsigned long unlockTime = 0; // Waktu ketika kunci terbuka
//const unsigned long unlockDuration = 1000; // Durasi kunci terbuka dalam milidetik

Servo myServo;
MFRC522 rfid(SS_PIN, RST_PIN);
NewPing cm(triger,echo,batas);
LiquidCrystal_I2C lcd (0x27 , 16, 2);

void setup() {
  Serial.begin(9600);
  SPI.begin();
  lcd.begin();
  lcd.backlight();
  rfid.PCD_Init();
  myServo.attach(7); // Attach servo to pin 7
  myServo.write(0); // Initialize servo position (locked)
  Serial.println("Waiting for an RFID card...");
  pinMode(buzzerPin,OUTPUT);


  buzzerOke();
  lcd.setCursor(0,0);lcd.print("GERBANG OTOMATIS");
  lcd.setCursor(0,1);lcd.print("TEMPELKAN KARTU");
  delay(1000);
}
void buzzerOke(){
    digitalWrite(buzzerPin,HIGH);
    delay(100);
    digitalWrite(buzzerPin,LOW);
    delay(500);
    digitalWrite(buzzerPin,HIGH);
    delay(100);
    digitalWrite(buzzerPin,LOW);
    delay(500);
  }
void buzzerGagal(){
   digitalWrite(buzzerPin,HIGH);
   delay(1000);
   digitalWrite(buzzerPin,LOW);
   delay(1000);
  }
void loop() {
  //unsigned long currentTime = millis();
  int bacaJarak=cm.ping_cm();
  Serial.print("Data jarak:");
  Serial.print(bacaJarak);
  Serial.print(" cm");
  Serial.println();
  delay(500); //Jeda waktu perulagan seama 500 mili detik
     //inisiasi lcd

  if (bacaJarak <20 and bacaJarak >0){
  myServo.write(0);
  lcd.setCursor(0,0);lcd.print("SELAMAT DATANG");
  lcd.setCursor(0,1);lcd.print("TEMPELKAN KARTU");
  delay(1000);
        }
//  lcd.clear();
//  lcd.backlight();
//  lcd.setCursor(0,0);lcd.print("GERBANG OTOMATIS");
//  //lcd.print(bacaJarak);lcd.print(" ");
//  delay(1000);


  
  if (rfid.PICC_IsNewCardPresent()and rfid.PICC_ReadCardSerial()) {
      Serial.print("Kartu Terdeteksi");
//      Serial.print(" | ");
//      Serial.print("Kunci1: ");
//      Serial.println(kunci1);
//      //delay(200);


      String uidContent = "";

      for (byte i = 0; i < rfid.uid.size; i++) {
        uidContent.concat(String(rfid.uid.uidByte[i] < 0x10 ? "0" : ""));
        uidContent.concat(String(rfid.uid.uidByte[i], HEX));
      }

      Serial.print("UID Tag: ");
      Serial.println(uidContent);
      

      
 if (uidContent == "02c9b3a1f08c60" || uidContent == "04731dbad45d80") {
      buzzerOke();
       myServo.write(90); // Unlock the servo (open)
       lcd.clear();lcd.setCursor(0,0);lcd.print("BERHASIL MASUK");
       delay(1000);
 }

else{
    buzzerGagal();
    myServo.write(0);
    lcd.clear();lcd.setCursor(0,0);lcd.print("KARTU DITOLAK");
    delay(1000);
//          
          }
   
      

  }
}
  
    
