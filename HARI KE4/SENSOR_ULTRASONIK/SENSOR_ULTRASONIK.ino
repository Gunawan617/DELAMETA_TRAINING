//Download dan masukan Library NewPing
#include <NewPing.h>
//Inisialisasi pembuatan variable
int buzzer =4;
int triger =3;
int echo =2;
int batas =200; //Maksimal 400 cm
NewPing cm(triger,echo,batas);
void setup() {
 //Menentukan Fungsionalitas dari PIN pada Microcontroller
 pinMode(buzzer,OUTPUT);
 Serial.begin(115200); //baudrate yang digunakan untuk komunikasi microcontroller dengan komputer
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

 if (bacaJarak <=20){//LEBIH DARI
  digitalWrite(buzzer,HIGH);
  delay(150);
  digitalWrite(buzzer,LOW);
  delay(100);
  
 }
 else if(bacaJarak >=20){//Kurang dari 20)
    digitalWrite(buzzer,HIGH);
    delay(100);
      digitalWrite(buzzer,LOW);
  delay(10);
  }
   else if(bacaJarak >=5){//Kurang dari 5)
    digitalWrite(buzzer,HIGH);
    delay(100);
      digitalWrite(buzzer,LOW);
  delay(50);
  }
  else{
    }
      digitalWrite(buzzer,LOW);
}
