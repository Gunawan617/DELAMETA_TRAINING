int relay1=7;
void setup() {
  // put your setup code here, to run once:
  pinMode(relay1,OUTPUT);
}

void loop() {
  digitalWrite(relay1,HIGH);
  delay(100);
  digitalWrite(relay1,LOW);
  // put your main code here, to run repeatedly:

}
