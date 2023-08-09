//Inisialisasi pembuatan variable
int led =3;
int sensorLDR =A0;
void setup() {
 //Menentukan Fungsionalitas dari PIN pada Microcontroller
 Serial.begin(115200); //baudrate yang digunakan untuk komunikasi microcontroller dengan komputer
 pinMode(sensorLDR,INPUT);
 pinMode(led,OUTPUT);
}
void loop() {
 //Program yang akan dijalankan berulang-ulang
 analogWrite(led,50);//0-255
 delay(500);
  analogWrite(led,100);//0-255
 delay(500);
  analogWrite(led,150);//0-255
 delay(500);
  analogWrite(led,200);//0-255
 delay(500);
  analogWrite(led,250);//0-255
   delay(500);
 
 int bacaLDR=analogRead(sensorLDR); //Membaca Nilai LDR
 
 //Print ke Serial Monitor
 Serial.print("Nilai LDR:");
 Serial.print(bacaLDR);
 Serial.println();
 delay(500); //Jeda waktu perulagan seama 500 mili detik
}
