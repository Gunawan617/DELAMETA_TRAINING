
#include <LiquidCrystal_I2C.h>
#include <OneWire.h>
#include <DallasTemperature.h>

LiquidCrystal_I2C lcd(0x27, 16, 2);
int pir = A0;
int flame = A1;
int temp = 6;
int relay=7;
int buzzer =11;
OneWire oneWire(temp);
DallasTemperature sensors(&oneWire);

void setup() {
  Serial.begin(115200); // Initialize the LCD with the dimensions (16x2)
  pinMode(pir, INPUT);
  pinMode(flame, INPUT);
  pinMode(relay,OUTPUT);
  pinMode(buzzer,OUTPUT);
  lcd.begin(); // Initialize the LCD without any arguments
  lcd.backlight(); // Turn on the backlight (if available)
}

void loop() {
    
  int pirr = digitalRead(pir);
  
  lcd.setCursor(9,1);lcd.print("P:");lcd.print(pirr);
  Serial.print("Kondisi PIR: ");
  Serial.println();
  //
  
  int bFlame = analogRead(flame);
  lcd.setCursor(0,0);lcd.print("F:");lcd.print(bFlame);
  Serial.print("Nilai flame: ");
  Serial.println(bFlame);
  
  sensors.requestTemperatures();
  float cTemp = sensors.getTempCByIndex(0);
  lcd.setCursor(0,1);lcd.print("S:");lcd.print(cTemp);
  Serial.print("Temperature: ");
  Serial.print(cTemp);
  Serial.println(" °C");

//flame
if (bFlame>=1000){
  Serial.print("Tidak ada api");
  Serial.println();
  digitalWrite(buzzer,LOW);
  }
else if(bFlame <=750 && bFlame >300){
  Serial.print("ADA API");
  Serial.println();
  digitalWrite(buzzer,HIGH);
  delay(500);
  digitalWrite(buzzer,LOW);
  delay(500);
}
else if (bFlame <=300){
  Serial.print("API SEMAKIN MEMBESAR");
  Serial.println();
  digitalWrite(buzzer,HIGH);
  delay(100);
  digitalWrite(buzzer,LOW);
  delay(100);
}
//pir
else if(pirr ==1){
  digitalWrite(buzzer,HIGH);
  delay(100);
  digitalWrite(buzzer,LOW);
  delay(100);
  digitalWrite(relay,LOW);
//suhu
}
else if (cTemp >=30)
{
  digitalWrite(buzzer,HIGH);
  delay(50);
  digitalWrite(buzzer,LOW);
  delay(100);
  Serial.print("PANAS");
  }
 else{
  digitalWrite(buzzer,LOW);
  digitalWrite(relay,HIGH);
  
  }

//lcd.clear();
delay(100); // Add a delay to avoid rapid updates and readability issues
 
  }
  
 
