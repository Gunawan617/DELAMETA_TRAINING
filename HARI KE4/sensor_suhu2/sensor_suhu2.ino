//Download dan masukan Library Onewire dan DalasTemperature
#include <OneWire.h>
#include <DallasTemperature.h>
//Inisialisasi pembuatan variable
int sensorSuhu =2;
int buzzer=12:
OneWire oneWire(sensorSuhu);
DallasTemperature sensors(&oneWire);
void setup() {
 //Menentukan Fungsionalitas dari PIN pada Microcontroller
 Serial.begin(115200); //baudrate yang digunakan untuk komunikasi microcontroller dengan komputer
 sensors.begin(); //Memanggil fungsi
}

void loop() {
 //Program yang akan dijalankan berulang-ulang
 sensors.requestTemperatures();
 float bacaSuhu = sensors.getTempCByIndex(0); //Membaca data di index 0 pada one wire
 if(bacaSuhu >=30)
 {
  digitalWrite(buzzer,HIGH);
  delay(50)
  digitalWrite(buzzer,LOW);
  delay(100);
 Serial.print("PANAS")
 }
 else
 {
  digitalWrite(buzzer,LOW);
  delay(100);

 }
}
