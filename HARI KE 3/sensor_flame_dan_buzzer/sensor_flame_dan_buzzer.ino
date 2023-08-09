//Inisialisasi pembuatan variable
int sensorFlame =A1;
int buzzer=11;
void setup() {
 //Menentukan Fungsionalitas dari PIN pada Microcontroller
 Serial.begin(115200); //baudrate yang digunakan untuk komunikasi microcontroller dengan komputer
 pinMode(sensorFlame,INPUT);
  pinMode(buzzer,OUTPUT);
}
void loop() {
 //Program yang akan dijalankan berulang-ulang
 int bacaFlame=analogRead(sensorFlame); //Membaca Nilai Flame
 //Print ke Serial Monitor
 Serial.print("Nilai Flame :");
 Serial.print(bacaFlame);
 Serial.println();
 delay(50); //Jeda waktu perulagan seama 500 mili detik

 if (bacaFlame>=1000){
  Serial.print("TIDAK ADA API");
  Serial.println();
  digitalWrite(buzzer,LOW);
 delay(500);
  }
 else if(bacaFlame <=750&&bacaFlame>300){
 Serial.print("WOY ADA API");
 Serial.println();
    digitalWrite(buzzer,HIGH);
 delay(500);
     digitalWrite(buzzer,LOW);
 delay(500);
    
  }
  else if(bacaFlame <=300){
 Serial.print(" WOYYY Api membesar SEGERA PADAMKAN");
 Serial.println();
    digitalWrite(buzzer,HIGH);
 delay(100);
     digitalWrite(buzzer,LOW);
 delay(100);
    
  {
    digitalWrite(buzzer,LOW);
     Serial.print("Api padam");
     Serial.println();
    }
}
}


//int buzzer=11;
//void setup(){
//  pinMode(buzzer, OUTPUT);
//}
//
//void loop(){
//  tone(buzzer, 1000);
//  delay(1000);     
//  tone(buzzer, 500);
//  delay(1000);     
//  noTone(buzzer);   
//  delay(1000);     
//}
