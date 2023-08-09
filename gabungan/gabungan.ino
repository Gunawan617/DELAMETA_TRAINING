
//pir
// PIN koneksi:
#define pirPin 2
#define ledPin 3
int sensorLDR =A0;
// Membuat variable:
int val = 0;
bool motionState = false; // dimulai dari tidak ada gerakan
int sensorFlame =A1;
int buzzer=11;

void setup() {
  // Konfigurasikan pin sebagai input atau output:
  pinMode(ledPin, OUTPUT);
  pinMode(pirPin, INPUT);
  pinMode(sensorFlame,INPUT);
  pinMode(sensorLDR,INPUT);

  // Mulai komunikasi serial dengan kecepatan 9600:
  Serial.begin(9600);
}

void loop() {
  // Membaca pirPin dan simpan sebagai val:
  val = digitalRead(pirPin);

  // Jika gerakan terdeteksi (pirPin = HIGH), lakukan hal berikut:
  if (val == HIGH) {
    digitalWrite(ledPin, HIGH); // Hidupkan LED.

    // Ubah status gerakan menjadi true (gerakan terdeteksi):
    if (motionState == false) {
      Serial.println("Motion detected!");
      motionState = true;
    }
  }

  // Jika tidak ada gerakan yang terdeteksi (pirPin = LOW), lakukan hal berikut:
  else {
    digitalWrite(ledPin, LOW); // Matikan LED.

    // Ubah status gerakan ke false (tidak ada gerakan):
    if (motionState == true) {
      Serial.println("Motion ended!");
      motionState = false;
    }
  }
  //Program api
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

//program ldr 
 if(sensorLDR<=400){
  digitalWrite(ledPin,HIGH);
 }
  else
  analogWrite(ledPin,LOW);
  int bacaLDR=analogRead(sensorLDR); //Membaca Nilai LDR
 //Print ke Serial Monitor
 Serial.print("Nilai LDR:");
 Serial.print(bacaLDR);
 Serial.println();
 delay(500);
  }
