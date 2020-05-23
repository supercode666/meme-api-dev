<?php
	include('retrieval/meme_page_retrieval.php');
?>


<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Gallery | Intex Interview Test</title>

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


		<style>
			.thumbnail {
				margin-bottom: 10px;
				padding: 5px;
			}

			.meme-name {
				height: 50px;
				text-overflow: ellipsis;
			}

			@media (max-width: 380px) {
				.meme-frame {
					height: 100px;
				}

				.meme-img {
					object-fit: contain;
					height: 90px !important;
					width: 90px !important;
				}
			}

			@media (min-width: 381px) {
				.meme-frame {
					height: 125px;
				}

				.meme-img {
					object-fit: contain;
					height: 115px !important;
					width: 115px !important;
				}
			}


			@media (min-width: 767px) {
				.meme-frame {
					height: 175px;
				}

				.meme-img {
					object-fit: contain;
					height: 165px !important;
					width: 165px !important;
				}
			}

			@media (min-width: 992px) {
				.meme-frame {
					height: 200px;
				}

				.meme-img {
					object-fit: contain;
					height: 190px !important;
					width: 190px !important;
				}
			}
		</style>
	</head>
	<body>
		<div class="container">
			<!-- title -->
			<div>
				<h1 class="text-center">Challenge details, click <a href="challenge.php">HERE</a></h1>
			</div>
			<br />

			<!-- images container -->
			<div class="well">
				<div class="row">
							<?php while ($row = mysqli_fetch_array($result)) {?>
									<div class="col-xs-6 col-sm-4">
										<div class="thumbnail meme-frame" style="display:flex">
											<img class="meme-img center-block" style="align-self: center" src="<?php echo $row['meme_url']; ?>" />
										</div>
										<div class="meme-name">
											<h6 class="text-center"><?php echo $row['meme_name']; ?></h6>
										</div>
									</div>
							<?php } ?>
							
							
							
				</div> <!-- row -->
			</div> <!-- well -->

			<nav aria-label="Page navigation">
				<ul class="pagination">
										<li>
						<a href="http://interview.funplay8.com/index.php?page=94" aria-label="Previous">
						  <span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<li><a href="http://interview.funplay8.com/index.php?page=1">1</a></li><li><a href="http://interview.funplay8.com/index.php?page=2">2</a></li><li><a href="http://interview.funplay8.com/index.php?page=3">3</a></li><li><a href="http://interview.funplay8.com/index.php?page=4">4</a></li><li><a href="http://interview.funplay8.com/index.php?page=5">5</a></li><li><a href="http://interview.funplay8.com/index.php?page=6">6</a></li><li><a href="http://interview.funplay8.com/index.php?page=7">7</a></li><li><a href="http://interview.funplay8.com/index.php?page=8">8</a></li><li><a href="http://interview.funplay8.com/index.php?page=9">9</a></li><li><a href="http://interview.funplay8.com/index.php?page=10">10</a></li><li><a href="http://interview.funplay8.com/index.php?page=11">11</a></li><li><a href="http://interview.funplay8.com/index.php?page=12">12</a></li><li><a href="http://interview.funplay8.com/index.php?page=13">13</a></li><li><a href="http://interview.funplay8.com/index.php?page=14">14</a></li><li><a href="http://interview.funplay8.com/index.php?page=15">15</a></li><li><a href="http://interview.funplay8.com/index.php?page=16">16</a></li><li><a href="http://interview.funplay8.com/index.php?page=17">17</a></li><li><a href="http://interview.funplay8.com/index.php?page=18">18</a></li><li><a href="http://interview.funplay8.com/index.php?page=19">19</a></li><li><a href="http://interview.funplay8.com/index.php?page=20">20</a></li><li><a href="http://interview.funplay8.com/index.php?page=21">21</a></li><li><a href="http://interview.funplay8.com/index.php?page=22">22</a></li><li><a href="http://interview.funplay8.com/index.php?page=23">23</a></li><li><a href="http://interview.funplay8.com/index.php?page=24">24</a></li><li><a href="http://interview.funplay8.com/index.php?page=25">25</a></li><li><a href="http://interview.funplay8.com/index.php?page=26">26</a></li><li><a href="http://interview.funplay8.com/index.php?page=27">27</a></li><li><a href="http://interview.funplay8.com/index.php?page=28">28</a></li><li><a href="http://interview.funplay8.com/index.php?page=29">29</a></li><li><a href="http://interview.funplay8.com/index.php?page=30">30</a></li><li><a href="http://interview.funplay8.com/index.php?page=31">31</a></li><li><a href="http://interview.funplay8.com/index.php?page=32">32</a></li><li><a href="http://interview.funplay8.com/index.php?page=33">33</a></li><li><a href="http://interview.funplay8.com/index.php?page=34">34</a></li><li><a href="http://interview.funplay8.com/index.php?page=35">35</a></li><li><a href="http://interview.funplay8.com/index.php?page=36">36</a></li><li><a href="http://interview.funplay8.com/index.php?page=37">37</a></li><li><a href="http://interview.funplay8.com/index.php?page=38">38</a></li><li><a href="http://interview.funplay8.com/index.php?page=39">39</a></li><li><a href="http://interview.funplay8.com/index.php?page=40">40</a></li><li><a href="http://interview.funplay8.com/index.php?page=41">41</a></li><li><a href="http://interview.funplay8.com/index.php?page=42">42</a></li><li><a href="http://interview.funplay8.com/index.php?page=43">43</a></li><li><a href="http://interview.funplay8.com/index.php?page=44">44</a></li><li><a href="http://interview.funplay8.com/index.php?page=45">45</a></li><li><a href="http://interview.funplay8.com/index.php?page=46">46</a></li><li><a href="http://interview.funplay8.com/index.php?page=47">47</a></li><li><a href="http://interview.funplay8.com/index.php?page=48">48</a></li><li><a href="http://interview.funplay8.com/index.php?page=49">49</a></li><li><a href="http://interview.funplay8.com/index.php?page=50">50</a></li><li><a href="http://interview.funplay8.com/index.php?page=51">51</a></li><li><a href="http://interview.funplay8.com/index.php?page=52">52</a></li><li><a href="http://interview.funplay8.com/index.php?page=53">53</a></li><li><a href="http://interview.funplay8.com/index.php?page=54">54</a></li><li><a href="http://interview.funplay8.com/index.php?page=55">55</a></li><li><a href="http://interview.funplay8.com/index.php?page=56">56</a></li><li><a href="http://interview.funplay8.com/index.php?page=57">57</a></li><li><a href="http://interview.funplay8.com/index.php?page=58">58</a></li><li><a href="http://interview.funplay8.com/index.php?page=59">59</a></li><li><a href="http://interview.funplay8.com/index.php?page=60">60</a></li><li><a href="http://interview.funplay8.com/index.php?page=61">61</a></li><li><a href="http://interview.funplay8.com/index.php?page=62">62</a></li><li><a href="http://interview.funplay8.com/index.php?page=63">63</a></li><li><a href="http://interview.funplay8.com/index.php?page=64">64</a></li><li><a href="http://interview.funplay8.com/index.php?page=65">65</a></li><li><a href="http://interview.funplay8.com/index.php?page=66">66</a></li><li><a href="http://interview.funplay8.com/index.php?page=67">67</a></li><li><a href="http://interview.funplay8.com/index.php?page=68">68</a></li><li><a href="http://interview.funplay8.com/index.php?page=69">69</a></li><li><a href="http://interview.funplay8.com/index.php?page=70">70</a></li><li><a href="http://interview.funplay8.com/index.php?page=71">71</a></li><li><a href="http://interview.funplay8.com/index.php?page=72">72</a></li><li><a href="http://interview.funplay8.com/index.php?page=73">73</a></li><li><a href="http://interview.funplay8.com/index.php?page=74">74</a></li><li><a href="http://interview.funplay8.com/index.php?page=75">75</a></li><li><a href="http://interview.funplay8.com/index.php?page=76">76</a></li><li><a href="http://interview.funplay8.com/index.php?page=77">77</a></li><li><a href="http://interview.funplay8.com/index.php?page=78">78</a></li><li><a href="http://interview.funplay8.com/index.php?page=79">79</a></li><li><a href="http://interview.funplay8.com/index.php?page=80">80</a></li><li><a href="http://interview.funplay8.com/index.php?page=81">81</a></li><li><a href="http://interview.funplay8.com/index.php?page=82">82</a></li><li><a href="http://interview.funplay8.com/index.php?page=83">83</a></li><li><a href="http://interview.funplay8.com/index.php?page=84">84</a></li><li><a href="http://interview.funplay8.com/index.php?page=85">85</a></li><li><a href="http://interview.funplay8.com/index.php?page=86">86</a></li><li><a href="http://interview.funplay8.com/index.php?page=87">87</a></li><li><a href="http://interview.funplay8.com/index.php?page=88">88</a></li><li><a href="http://interview.funplay8.com/index.php?page=89">89</a></li><li><a href="http://interview.funplay8.com/index.php?page=90">90</a></li><li><a href="http://interview.funplay8.com/index.php?page=91">91</a></li><li><a href="http://interview.funplay8.com/index.php?page=92">92</a></li><li><a href="http://interview.funplay8.com/index.php?page=93">93</a></li><li><a href="http://interview.funplay8.com/index.php?page=94">94</a></li><li><a href="localhost:8080/meme/index.php?page=95">95</a></li><li><a href="http://interview.funplay8.com/index.php?page=96">96</a></li>					<li>
						<a href="http://interview.funplay8.com/index.php?page=96" aria-label="Next">
						  <span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul>
			</nav>
		</div> <!-- container -->

		<!-- jQuery -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</body>
</html>
