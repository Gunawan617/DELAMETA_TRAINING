//Inisialisasi pembuatan variable
int sensorLDR =A0;
int led =11;

void setup() {
 //Menentukan Fungsionalitas dari PIN pada Microcontroller
 Serial.begin(115200); //baudrate yang digunakan untuk komunikasi microcontroller dengan komputer
 pinMode(sensorLDR,INPUT);
 pinMode(led,OUTPUT);
}

void loop() {
 //Program yang akan dijalankan berulang-ulang
 int bacaLDR=analogRead(sensorLDR); //Membaca Nilai LDR

 //Print ke Serial Monitor
 Serial.print("Nilai LDR:");
 Serial.print(bacaLDR);
 Serial.println();

 //KONVERT NILAI LDR to PWM
 //terendah 72
 //tertingi 680
 int hasilConvert = map(bacaLDR,72,680,255,0);
 analogWrite(led,hasilConvert);
 Serial.print("Nilai LDR Konvert:");
 Serial.print(hasilConvert);
 Serial.println();
 
 delay(500); //Jeda waktu perulagan seama 500 mili detik
}
