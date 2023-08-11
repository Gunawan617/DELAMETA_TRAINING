#include <Wire.h>
#include <LiquidCrystal_I2C.h>
#include <NewPing.h>
#include <Servo.h>

//Inisialisasi pembuatan variable
int servo =7;
int buzzerPin =6;
int triger =3;
int echo =2;
int batas =200; //Maksimal 400 cm
int kunci1;
int kunci2;

LiquidCrystal_I2C lcd (0x27 , 16, 2);
Servo myServo;
NewPing cm(triger,echo,batas);
void setup() {
 //Menentukan Fungsionalitas dari PIN pada Microcontroller
 pinMode(buzzerPin,OUTPUT);
 Serial.begin(115200); //baudrate yang digunakan untuk komunikasi microcontroller dengan komputer
 myServo.attach(servo);
 myServo.write(0);


 lcd.begin();
 lcd.backlight();
 lcd.setCursor(1,0);
 lcd.print("Selamat datang");
 delay(2000);
 lcd.clear();
 delay(1000);
 lcd.noBacklight();
 
}
void loop() {
 //Program yang akan dijalankan berulang-ulang
 int bacaJarak=cm.ping_cm();
 //Print ke Serial Monitor
 Serial.print("Data jarak:");
 Serial.print(bacaJarak);
 Serial.print(" cm");
 Serial.println();
 delay(500); //Jeda waktu perulagan seama 500 mili detik
 //inisiasi lcd
lcd.clear();
lcd.backlight();
lcd.setCursor(1,0);lcd.print("Jarak:");
lcd.print(bacaJarak);lcd.print(" ");
delay(1000);



if (bacaJarak <20){
  kunci1=1;
  switch(kunci1)
  case 1:
  if (kunci2 ==0){
    digitalWrite(buzzerPin,HIGH);
    delay(1000);
    digitalWrite(buzzerPin,LOW);
    delay(500);
    kunci2=1;
    }else{
      lcd.clear();lcd.setCursor(1,0);lcd.print("SILAHKAN MASUK");
      myServo.write(90);
      delay(500);
      }
  }else{
    myServo.write(0);
    digitalWrite(buzzerPin,LOW);
    kunci1=0;
    kunci2=0;
    }
    Serial.println();
    delay(50);
    }
    
