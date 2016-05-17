#include <SPI.h>
#include <Ethernet.h>
#include <SD.h>
#define CARTE 4
#include <Wire.h>         
#include "RTClib.h"

#if defined(ARDUINO_ARCH_SAMD)
   #define Serial SerialUSB
#endif

RTC_Millis rtc;

int basculement=0;
String date="";
long nbMinute=0;
long depart=0;
//String stock="";
String nom="pluvio0";
byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };
IPAddress server(192,168,1,105);  // numeric IP for Google (no DNS)
IPAddress ip(192,168,1,200);
EthernetClient client;
float tension_pluvio=0,tension_pluvio_avant=0,nbtour=0;



void setup(){
  Serial.begin(9600);
  rtc.begin(DateTime(F(__DATE__), F(__TIME__)));
  Ethernet.begin(mac, ip);
  delay(1000);
  Serial.println("connecting...");
  if (client.connect(server, 80)) {
    Serial.println("connected");   
  } 
  else {
    Serial.println("connection failed");
  }
    pinMode(10, OUTPUT);
  if (!SD.begin(4)) {
    Serial.println("Card failed, or not present");
  }
  else Serial.println("card initialized.");
}

void loop(){
  if(!client.connect(server, 80))
    Serial.println("tentive de connexion echouee");
  Serial.println("debut");
  basculement=getBasculement();
  Serial.print("premier basculement = ");
  Serial.println(basculement);
  depart=millis();
  if(basculement!=0){
    nbMinute=0;
    while(nbMinute<6000){
      basculement+=getBasculement();
      nbMinute=(millis()-depart);
      // Serial.print("temps ecoule ");
      //Serial.println(nbMinute);
      
    }
   
    if (client.connected()) {
      Serial.println("le client est tjr connecte");
      envoi(basculement);
     // sendDonneesSave();
    }
    else{
      //Serial.println("le client c deconnecte");
      //Serial.println(basculement);
      //save(basculement);
    }
    depart=0;
    basculement=0;
  }
  

  if (!client.connected()) {
    Serial.println();
    Serial.println("disconnecting.");
    client.stop();
  }
 // save(getBasculement());
 //delay(1000);
}

int getBasculement(){
  
 /* int nbtour=0;
 float sensorValue_pluvio = analogRead(A0);
 tension_pluvio=(sensorValue_pluvio*5)/1023;
 Serial.println(tension_pluvio);
if(tension_pluvio<2.5 && tension_pluvio_avant>2.5){
  nbtour++;
 }
 tension_pluvio_avant=tension_pluvio;
 return nbtour;
  */
  return random(0, 50)< 40 ? 0 : 1;
}

void envoi(int donnees){
  String stock1="";
   stock1+=donnees;
   stock1+="&nom="+nom;
   stock1+="&date="+getDate();
   Serial.println(stock1);
   envoiDonnee(stock1);
}

void envoiDonnee(String donnee){
 Serial.println(donnee);
   String stock="";
  stock+="GET /projettransversal/testClient.php?donnees="+donnee+" HTTP/1.1";
  Serial.print("donnees avant l'envoi sont : ");
  Serial.println(stock);
  client.println(stock);
  client.println("Host: 192.168.1.101");
  client.println("Connection: close");
  client.println();
  Serial.print("donnees envoyees sont : ");
  Serial.println(stock);
  stock="";
}


String getDate(){
   DateTime now = rtc.now();
   String date ="";
   date+=now.day();
   date+='-';
   date+=String(now.month(), DEC);
   date+='-';
   date+=String(now.year(), DEC);
   date+=" ";
   date+=String(now.hour(), DEC);
   date+=':';
   date+=String(now.minute(), DEC);
   date+=':';
   date+=String(now.second(), DEC);
   //date+='-';
   return date;
   
}

void save(int donnees){
   //Serial.println("debut sauvegard");
  //if (SD.begin(CARTE)) {
    
    File sauvegard = SD.open("save.txt", FILE_WRITE);
    if(sauvegard){
      String save="";
      save+=donnees;
      save+="&nom="+nom;
      //save+="-"+getDate();
      sauvegard.print(save);
      sauvegard.print("&date=");
      sauvegard.println(getDate());
      sauvegard.close();
      delay(500);
      Serial.println(save);
      Serial.println("Les donnees sont enregistrees : ");
    }else{
      Serial.println("erreur douverture du fichier");
    }
    
  //}
  
}

void sendDonneesSave(){
  //Serial.println("debut restauration");
  File dataFile = SD.open("save.txt");
  String contenu="";
  if (dataFile) {
    while (dataFile.available()) {
      char c = dataFile.read();
      if(c=='\n'){
        Serial.print("donnee lues ");
        Serial.println(contenu);
        envoiDonnee(contenu);
        delay(500);
        contenu="";
      }
      else
        contenu+=String(c);
    }
    dataFile.close();
    envoiDonnee(contenu);
    SD.remove("save.txt");
  }
  Serial.println("restauration terminee");
  //return contenu;
}
