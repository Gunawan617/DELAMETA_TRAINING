//membuat perhitungan jumlah orang dengan sensor infrared
//Inisialisasi pembuatan pin variable
//ketika keluar jumlah orang berkurang dan dengan kondisi yang sama dengan point 1
//ketika jumlah orang 0 maka print ke serial ("jumlah orang kosong")
//ketika jumlah orang lebih dari 0 dan kurang dari 10 maka print ke serial ("masih tersedia untuk masuk")
//ketika jumlah orang lebih dari 10 maka print (sudah penuh)
//jika jumlah orang masih tersedia led hijau menyala dan jika penuh led merah menyala

//inisiasi program
int infrared =2;
int tombol =3;
int led1 =13;
int led2=12;

int jumlahorang =0;//Variabel pembantu
int kunci=0;
void setup() {
 //Menentukan Fungsionalitas dari PIN pada Microcontroller
 //SET INPUT OUTPUT
 Serial.begin(115200); //baudrate yang digunakan untuk komunikasi microcontroller dengan komputer
 pinMode(infrared,INPUT);
 pinMode(tombol,INPUT);
 pinMode(led1,OUTPUT);
 pinMode(led2,OUTPUT);

}
void loop() {
 //Program yang akan dijalankan berulang-ulang
 int bacainfrared=digitalRead(infrared); //Membaca keadaan Tombol
 int bacaTombol=digitalRead(tombol);

 //Print ke Serial Monitor
Serial.print("infrared:");
Serial.print(bacainfrared);
Serial.print("| tombol");
Serial.print(bacaTombol);

Serial.println(); 
Serial.print("Jumlahorang:");
Serial.print(jumlahorang);
 Serial.println();
//Menampilkan jumlah object orang yg melewati sensor
if(bacainfrared==0 && kunci==0){
  delay(200);
  jumlahorang++;
  kunci=1;
  }else if(bacainfrared==1){
  delay(200);
  kunci=0;
}
//Mengurangi dengan button
if (bacaTombol == 1 && kunci == 0 && jumlahorang > 0) {
    delay(200);
    jumlahorang--;
    kunci = 1;
  }
  //ketika jumlah orang masuk/keluar
  if (jumlahorang == 0) {
    Serial.println("Jumlah orang kosong");
  } else if (jumlahorang > 0 && jumlahorang < 10) {
    Serial.println("Masih tersedia untuk masuk");
  } else if (jumlahorang >= 10) {
    kunci=jumlahorang<=10;
    Serial.println("Sudah penuh");
  }

  // Control the LED based on the person count
  if (jumlahorang > 0 && jumlahorang < 10) {
    digitalWrite(led1, HIGH); // Led hijau menyala
  } else {
    digitalWrite(led1, LOW); // Led merah menyala
  }
  if (jumlahorang == 10) {
    digitalWrite(led2, HIGH); // Led hijau menyala
  } else {
    digitalWrite(led2, LOW); // Led merah menyala
  }
  delay(100);
}
