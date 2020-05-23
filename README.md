# meme-api-dev
## Attention

* **/meme/extra/meme.sql** is just a reference for db checking

---

## Usage
### Reload a new set of memes from http://interview.funplay8.com/index.php and store into db.
<pre>
<a href="http://iothost.xyz/meme/action/load_memes.php">http://iothost.xyz/meme/action/load_memes.php</a>
</pre>

```diff
- Do not perform if do not want to truncate the db
```



### REST API
#### 1. Get Request - all memes

<pre>
<a href="http://iothost.xyz/meme/all">http://iothost.xyz/meme/all</a>
</pre>

#### 2. Get Request - memes by id

<pre>
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

---


#### 5. Post Request - input new memes

##### Example JSON data input format :
```JSON
 {
    "data":
    [
	{
	    "name" : "mr bean",
	    "url" : "https://i.pinimg.com/236x/b5/aa/1b/b5aa1be3319ea5ed7eeb04498f7b37b3.jpg"
	},
	{
	    "name" : "santa shooting",
	    "url" : "https://i.imgflip.com/426jsn.jpg"
	}
	
    ]
}

```

<pre>
<a href="http://iothost.xyz/meme/create">http://iothost.xyz/meme/create</a>
</pre>

#### Results for Posts Requests

* View the results here : http://iothost.xyz/meme/index.php?page=95 
* The design is just a mock up for testing and presenting purposes.


