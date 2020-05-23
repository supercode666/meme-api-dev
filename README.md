# meme-api-dev
# Corana Virus Tracker with NodeMCU ESP8266
Version : V1.0

This is a version 1 of the Corona Virus Tracker for Specific country that will automatically update itself when there is a new data coming in on the ESP8266 or the API.

---

### Hardware
1. NodeMCU ESP8266 LUA
2. I2C 1602 Serial LCD

---

### IOT Wiring Schematic
![Corona_Trakcer_bb](https://user-images.githubusercontent.com/64577470/80731533-a4100280-8b3d-11ea-8dec-6d1685abd0cc.png)


---

### Installation of NodeMCU ESP8266

* Enter https://arduino.esp8266.com/stable/package_esp8266com_index.json into the Additional Board Manager URLs field.

---

### Usage
#### 1. Get Request - all memes

<pre>
<a href="http://iothost.xyz/meme/all">http://iothost.xyz/meme/all</a>
</pre>

#### 2. Get Request - memes by id

<pre>
Example :
<a href="http://iothost.xyz/id/1">http://iothost.xyz/id/1</a>
</pre>

#### 3. Get Request - memes by page

<pre>
<a href="http://iothost.xyz/meme/page/95">http://iothost.xyz/meme/page/95</a>
</pre>

#### 4. Get Request - memes by popularity

<pre>
<a href="http://iothost.xyz/meme/popular">http://iothost.xyz/meme/popular</a>
</pre>


#### 5. Post Request - input new memes

<pre>
<a href="http://iothost.xyz/meme/create">http://iothost.xyz/meme/create</a>
</pre>
