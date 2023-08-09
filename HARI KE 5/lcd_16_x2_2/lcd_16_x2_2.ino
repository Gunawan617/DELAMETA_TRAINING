//Download Library LiquidCrystal_I2C
#include <LiquidCrystal_I2C.h>
//Inisialisasi pembuatan variable
LiquidCrystal_I2C lcd(0x27, 16, 2);
void setup() {
//Menentukan Fungsionalitas dari PIN pada Microcontroller
Serial.begin(115200); //baudrate yang digunakan untuk komunikasi microcontroller dengan komputer
lcd.begin();
}
int suhu =random(30,100);
int flam=random(0,100);
int pir=random(0,100);
int ir=random(0,100);

void loop() {
  
  // put your main code here, to run repeatedly:
lcd.clear(); //Untuk Menghapus karakter pada LCD
lcd.setCursor(0,0); lcd.print(" SUHU:");//baris pertama
lcd.setCursor(6,0); lcd.print(suhu);
lcd.setCursor(9,0); lcd.print("PIR:");
lcd.setCursor(13,0); lcd.print(pir);
lcd.setCursor(0,1); lcd.print(" FLAM:");
lcd.setCursor(6,1); lcd.print(flam);
//baris pertama
lcd.setCursor(9,1); lcd.print("ir:");
lcd.setCursor(13,1); lcd.print(ir);
delay(1000); //Jeda waktu perulagan seama 1000 mili detik
}
