//Chalange membuat tombol 1x klik lampu menyala dan 1x klik lampu mati

//Inisialisasi pembuatan pin variable
int tombol1 =2;


int led1 =13;
int led2 =12;
int led3 =11;

int kunci=0; //Variabel pembantu

void setup() {
 //Menentukan Fungsionalitas dari PIN pada Microcontroller
 //SET INPUT OUTPUT
 Serial.begin(115200); //baudrate yang digunakan untuk komunikasi microcontroller dengan komputer
 pinMode(tombol1,INPUT);

 pinMode(led1,OUTPUT);
 pinMode(led2,OUTPUT);
 pinMode(led3,OUTPUT);
}
void loop() {
 //Program yang akan dijalankan berulang-ulang
 int bacaTombol1=digitalRead(tombol1); //Membaca keadaan Tombol

 //Print ke Serial Monitor
 Serial.print("Baca tombol 1:");
 Serial.print(bacaTombol1);
Serial.print("nilai saat ini");
Serial.println();
Serial.print(kunci);
 Serial.println();
//tombol 1 seperti saklar
if(bacaTombol1==1){
 delay(100);
  kunci++;
}

if(kunci==1){
  digitalWrite(led1, HIGH);
} else if(kunci==2){
   digitalWrite(led2, HIGH);
} else if(kunci==3){
   digitalWrite(led3, HIGH);
} else if(kunci==4){
digitalWrite(led1, LOW);
digitalWrite(led2, LOW);
digitalWrite(led3, LOW);
kunci=0;
}
delay(100);
}
