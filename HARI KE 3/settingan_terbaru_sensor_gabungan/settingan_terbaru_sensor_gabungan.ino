int SensorLDR =A0;
int SensorFlame =A1;
int SensorPir =A2;
int buzzer =3;
void setup() {
  // put your setup code here, to run once:
Serial.begin(115200);
pinMode(SensorLDR,INPUT);
pinMode(SensorFlame,INPUT);
pinMode(SensorPir,INPUT);
pinMode(buzzer,OUTPUT);
}

void loop() {
  // put your main code here, to run repeatedly:
  int BacaLDR =analogRead(SensorLDR);
  int BacaFlame =analogRead(SensorFlame);
  int BacaPir =analogRead(SensorPir);

  Serial.print("LDR:");   Serial.print(BacaLDR);
  Serial.print("Flame:"); Serial.print(BacaFlame);
  Serial.print("Pir:");   Serial.print(BacaPir);


  //LDR Gelap(100);
  //Flame ada Api(20);
 // Pir deteksi obj(1)

 //Logika

 if (BacaLDR<100){
  digitalWrite(buzzer,HIGH);
  delay(1000);
  digitalWrite(buzzer,LOW);
  delay(1000);
 }
 else if(BacaFlame<20){
  digitalWrite(buzzer,HIGH);
  delay(100);
  digitalWrite(buzzer,LOW);
  delay(100);
  
 }
  else if(BacaPir==1){
  digitalWrite(buzzer,HIGH);
  delay(500);
  digitalWrite(buzzer,LOW);
  delay(500);
  
 }
 else{
  digitalWrite(buzzer,LOW);
  
  }
  
  

}
