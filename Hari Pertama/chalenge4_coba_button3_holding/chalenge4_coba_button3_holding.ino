    int tombol1 =3;
    int tombol2 =4;
    int tombol3 =5;
    
    int led1=13;
    int led2=12;
    int led3=11;
    int kunci = 0;


void setup() {
      // put your setup code here, to run once:
        pinMode (tombol1,INPUT);
        pinMode (tombol2,INPUT);
        pinMode (tombol3,INPUT);
        pinMode(led1,OUTPUT);
        pinMode(led2,OUTPUT);
        pinMode(led3,OUTPUT);
    }
    
    void loop() {
      // put your main code here, to run repeatedly:
      int bacaTombol1=digitalRead(tombol1);
      int bacaTombol2=digitalRead(tombol2);
      int bacaTombol3=digitalRead(tombol3);
      //print ke monitor
    
      Serial.print("Kondisi Tombol");
      Serial.print("baca tombol");
      Serial.println();
      
    if(bacaTombol1==1 and kunci==0)
    {  
         delay(100);
         kunci=1;
         digitalWrite(led1,HIGH);
         Serial.println("LAMPU 1 NYALA CLICK");//komentar nyala
      }
    else if (bacaTombol1==1 and kunci==1)
    {     
         delay(100);
         kunci=0;
         digitalWrite(led1,LOW);
         Serial.println("LAMPU 1 MATI CLICK");
      }
      
       if(bacaTombol2==1 and kunci==0)
    {  
         delay(100);
         kunci=1;
         digitalWrite(led2,HIGH);
         Serial.println("LAMPU 1 NYALA CLICK");//komentar nyala
      }
    else if (bacaTombol2==1 and kunci==1)
    {     
         delay(100);
         kunci=0;
         digitalWrite(led2,LOW);
         Serial.println("LAMPU 1 MATI CLICK");
      }
        if(bacaTombol3==1 and kunci==0)
    {  
         delay(100);
         kunci=1;
         digitalWrite(led3,HIGH);
         Serial.println("LAMPU 1 NYALA CLICK");//komentar nyala
      }
    else if (bacaTombol3==1 and kunci==1)
    {     
         delay(100);
         kunci=0;
         digitalWrite(led3,LOW);
         Serial.println("LAMPU 1 MATI CLICK");
      }

      
    }
    
     
