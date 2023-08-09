//Inisialisasi pembuatan variable
int infrared =2;
int tombol   =3;

int ledmerah =13;
int ledhijau =12;

int jumlahorang =0; //Variable Pembantu
int kunci1=0;
int kunci2=0;

void setup() {
 //Menentukan Fungsionalitas dari PIN pada Microcontroller
 Serial.begin(115200); //baudrate yang digunakan untuk komunikasi microcontroller dengan komputer
 pinMode(infrared,INPUT);
 pinMode(tombol,INPUT);
 pinMode(ledmerah,OUTPUT);
 pinMode(ledhijau,OUTPUT);
}

void loop() {
 //Program yang akan dijalankan berulang-ulang
 int bacaInfrared=digitalRead(infrared); //Membaca keadaan Tombol
 int bacaTombol =digitalRead(tombol); //Membaca keadaan Tombol
 
 //Print ke Serial Monitor
//  Serial.print("Infrared:");
//  Serial.print(bacaInfrared);
//  Serial.print(" | tombol:");
//  Serial.print(bacaTombol);
//  Serial.println();
  
  Serial.print("Jumlah Orang:");
  Serial.print(jumlahorang);
  Serial.println();

 //Logika Program (Jika tombol membaca Nilai 1 maka led menyala, jika bukan 1 maka mati
 //UNTUK MASUK
 if(bacaInfrared==0 and kunci1==0 and jumlahorang!=10){
  jumlahorang++; 
  kunci1=1;
 } else if(bacaInfrared==1){
  kunci1=0;
 }
 
 //UNTUK KELUAR
 if(bacaTombol==1 and kunci2==0 and jumlahorang!=0){
  jumlahorang--; 
  kunci2=1;
 } else if(bacaTombol==0){
  kunci2=0;
 }

 //LOGIKA INFORMASI
 if (jumlahorang <=0){
  Serial.println("JUMLAH ORANG KOSONG");
  digitalWrite(ledhijau,HIGH);
  digitalWrite(ledmerah,LOW);
 }else if (jumlahorang >=1 and jumlahorang <=9 ){
  Serial.println("MASIH TERSEDIA UNTUK MASUK");
  digitalWrite(ledhijau,HIGH);
  digitalWrite(ledmerah,LOW);
 }else if (jumlahorang >=10){
  Serial.println("SUDAH PENUH TIDAK BISA MASUK");
  digitalWrite(ledhijau,LOW);
  digitalWrite(ledmerah,HIGH);
 } 
 delay(100); //Jeda waktu perulagan seama 500 mili detik
}
