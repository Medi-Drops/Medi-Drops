﻿<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>MediDrop</title>
  <script type="text/javascript">
  function populate(s1,s2){
        var s1 = document.getElementById(s1);
        var s2 = document.getElementById(s2);
        s2.innerHTML = "";          
        
        if(s1.value == "Andaman and Nicobar Islands"){
            var optionArray = ["nicobar|Nicobar","north and middle andaman|North and Middle Andaman","south andaman|South Andaman"];
        
        }else if(s1.value == "Andhra Pradesh"){
            var optionArray = ["east Godavari|East Godavari","west Godavari|West Godavari","krishna|Krishna","guntur|Guntur","prakasam|Prakasam","nellore|Nellore","srikakulam|Srikakulam","vizianagaram|Vizianagaram","visakhapatnam|Visakhapatnam","kurnool|Kurnool","chittoor|Chittoor","kadapa|Kadapa","anantapur|Anantapur"];
        }else if(s1.value =="Arunachal Pradesh"){
        
            var optionArray = ["anjaw|Anjaw","changlang|Changlang","dibang valley|Dibang Valley","east kameng|East Kameng","east siang|East Siang","kra daadi|Kra Daadi","kurung kumey|Kurung Kumey","lohit|Lohit","longding|Longding","lower dibang valley|Lower Dibang Valley","lower subansiri|Lower Subansiri","namsai|Namsai","papum pare|Papum Pare","siang|Siang","tawang|Tawang","tirap|Tirap","upper siang|Upper Siang","upper subansiri|Upper Subansiri","west kameng|West Kameng","west siang|West Siang"];
        }else if(s1.value == "Bihar"){
        
            var optionArray = ["araria|Araria","madhepura|Madhepura","arwal|Arwal","madhubani|Madhubani","auranagabad|Aurangabad","monghyr|Monghyr","banka|Banka","muzaffarpur|Muzaffarpur","begusarai|Begusarai","nalanda|Nalanda","bhagalpur|Bhagalpur","nawada|Nawada","bhojpur|Bhojpur","patna|Patna","buxar|Buxar","purnea|Purnea","darbhanga|Darbhanga","rohtas|Rohtas","east champaran|East Champaran","sahasra|Saharsa","gaya|Gaya","samastipur|Samastipur","gopalganj|Gopalganj","saran|Saran","jamui|Jamui","shiekpura|Shiekhpura","jehanabad|Jehanabad","sheohar|Sheohar","kaimur|Kaimur","sitamarhi|Sitamarhi","kathiar|Katihar","siwan|Siwan","khagaria|Khagaria","supaul|Supaul","kishanganj|Kishanganj","vaishali|Vaishali","lakhisarai|Lakhisarai","west champaran|West Champaran"];
        }else if(s1.value == "Chandigarh"){
            var optionArray = ["chandigarh|Chandigarh"];
        }
        else if(s1.value == "Chhattisgarh"){
        
        
            var optionArray = ["balod|Balod","baloda bazar|Baloda Bazar","balrampur|Balrampur","bastar|Bastar","bemetara|Bemetara","bijapur|Bijapur","bilaspur|Bilaspur","dantewada (south bastar)|Dantewada (South Bastar)","dhamtari|Dhamtari","durg|Durg","gariband|Gariyaband","janjgir-champa|Janjgir-Champa","jashpur|Jashpur","kabirdham (kawardha)|Kabirdham (Kawardha)","kanker (north bastar)|Kanker (North Bastar)","kondagaon|Kondagaon","korba|Korba","korea (koriya)|Korea (Koriya)","mahasamund|Mahasamund","mungeli|Mungeli","narayanpur|Narayanpur","raigarh|Raigarh","raipur|Raipur","rajnandgaon|Rajnandgaon","sukma|Sukma","surajpur|Surajpur","surguja|Surguja"];
        }else if(s1.value == "Dadra and Nagar Haveli"){
        
            var optionArray = ["dadra and nagar haveli|Dadra and Nagar Haveli"];        
        }else if(s1.value == "Daman and Diu"){
        
            var optionArray = ["daman|Daman","diu|Diu"];        
        }else if(s1.value == "National Capital Territory of Delhi"){
        
            var optionArray = ["new delhi|New Delhi"];      
        }else if(s1.value == "Goa"){
        
            var optionArray = ["north goa|North Goa","south goa|South Goa"];        
        }else if(s1.value == "Gujarat"){
        
            var optionArray = ["ahmedabad|Ahmedabad","amreli|Amreli","anand|Anand","aravalli|Aravalli","banaskantha|Banaskantha","bharuch|Bharuch","bhavnagar|Bhavnagar","botad|Botad","chhota udaipur|Chhota Udaipur","dahod|Dahod","dang|Dang","devbhoomi dwaraka|Devbhoomi Dwaraka","gandhinagar|Gandhinagar","gir somnatah|Gir Somnatah","jamnagar|Jamnagar","junagadh|Junagadh","kutch|Kutch","kheda|Kheda","mahisagar|Mahisagar","mehsana|Mehsana","morbi|Morbi","narmada|Narmada","navsari|Navsari","panchmahal|Panchmahal","patan|Patan","porbandar|Porbandar","rajkot|Rajkot","sabarkantha|Sabarkantha","surat|Surat","surendranagar|Surendranagar","tapi|Tapi","vadodara|Vadodara","valsad|Valsad"];      
        }else if(s1.value == "Haryana"){
        
            var optionArray = ["ambala|Ambala","bhiwani|Bhiwani","charkhi dadri|Charkhi Dadri","faridabad|Faridabad","fatehabad|Fatehabad","gurugram|Gurugram","hisar|Hisar","jhajjar|Jhajjar","jind|Jind","kaithal|Kaithal","karnal|Karnal","kurukshetra|Kurukshetra","mahendragarh|Mahendragarh","nuh|Nuh","palwal|Palwal","panchkula|Panchkula","panipat|Panipat","rewari|Rewari","rohtak|Rohtak","sirsa|Sirsa","sonipat|Sonipat","yamunanagar|Yamunanagar"];        
        }else if(s1.value == "Himachal Pradesh"){
        
            var optionArray = ["bilaspur|Bilaspur","chamba|Chamba","hamirpur|Hamirpur","kangra|Kangra","kinnaur|Kinnaur","kullu|kullu","lahaul and spiti|Lahaul and Spiti","mandi|Mandi","shimla|Shimla","sirmaur|Sirmaur","solan|Solan","una|Una"];        
        }else if(s1.value == "Jammu and Kashmir"){
        
              var optionArray = ["doba|Doda","jammu|Jammu","kathua|Kathua","kishtwar|Kishtwar","poonch|Poonch","rajouri|Rajouri","ramban|Ramban","reasi|Reasi","sambha|Sambha","udhampur|Udhampur","anantnag|Anantnag","bandipora|Bandipora","baramulla|Baramulla","budgam|Budgam","ganderbal|Ganderbal","kulgam|Kulgam","kupwara|Kupwara","pulwama|Pulwama","shopian|Shopian","srinagar|Srinagar","kargil|Kargil","leh|Leh"];
        }else if(s1.value == "Jharkhand"){

              var optionArray = ["bokaro|Bokaro","chatra|Chatra","deoghar|Deoghar","dhanbad|Dhanbad","dumka|Dumka","east singhbhum|East Singhbhum","garhwa|Garhwa","giridih|Giridih","godda|Godda","gumla|Gumla","hazaribag|Hazaribag","jamtara|Jamtara","khunti|Khunti","koderma|Koderma","latehar|Latehar","lohardaga|Lohardaga","pakur|Pakur","palamu|Palamu","ramgarh|Ramgarh","ranchi|Ranchi","sahibganj|Sahibganj","seraikela kharsawan|Seraikela Kharsawan","simdega|Simdega","west singhbum|West Singhbhum"];
        }else if(s1.value =="Karnataka"){

              var optionArray = ["bagalkot|Bagalkot","bengaluru urban|Bengaluru Urban","bengaluru rural|Bengaluru Rural","belagavi|Belagavi","bellary|Bellary","bidar|Bidar","vijayapura|Vijayapura","chamarajanagar|Chamarajanagar","chikballapur|Chikballapur","chikkamagaluru|Chikkamagaluru","chitradurga|chitradurga","dakshina kannada|Dakshina Kannada","davanagere|Davanagere","dharwad|Dharwad","gadag|Gadag","kalaburagi|Kalaburagi","hassan|Hassan","haveri|Haveri","kodagu|Kodagu","kolar|Kolar","koppal|Koppal","mandya|Mandya","mysuru|Mysuru","raichur|Raichur","ramanagara|Ramanagara","shivamooga|Shivamooga","tumakuru|Tumakuru","udupi|Udupi","uttara kannada|Uttara Kannada","yadgir|Yadgir"];
        }else if(s1.value == "Kerala"){
        
            var optionArray = ["alappuzha|Alappuzha","ernakulam|Ernakulam","idukki|Idukki","kannur|Kannur","kasaragod|Kasaragod","kollam|Kollam","kottayam|Kottayam","kozhikode|Kozhikode","malappuram|Malappuram","palakkad|Palakkad","pathanamthitta|Pathanamthitta","thiruvananthapuram|Thiruvananthapuram","thrissur|Thrissur","wayanad|Wayanad"];    
        }else if(s1.value == "Lakshadweep"){
        
            var optionArray = ["lakshadweep|Lakshadweep"];
        }else if(s1.value == "Madhya Pradesh"){
        
            var optionArray = ["bhopal division|Bhopal Division","chambal divison|Chambal Division","gwalior division|Gwalior Division","indore division|Indore Division","jabalpur division|Jabalpur Division","narmadapuram divison|Narmadapuram Division","rewa division|Rewa Division","sagar division|Sagar Division","shadol division|Shahdol Division","ujjain division|Ujjain Division"];
        }else if(s1.value == "Maharashtra"){
        
            var optionArray = ["amravati division|Amravati Division","aurangabad division|Aurangabad Division","konkan division|Konkan Division","nagpur division|Nagpur Division","nashik division|Nashik Division","pune division|Pune Division"];    
        }else if(s1.value == "Manipur"){
        
            var optionArray = ["bishnupur|Bishnupur","thoubal|Thoubal","imphal east|Imphal East","imphal west|Imphal West","senapati|Senapati","ukhrul|Ukhrul","chandel|Chandel","churachandpur|Churachandpur","tamenglong|Tamenglong","jiribam|Jiribam","kangpokpi|Kangpokpi","kakching|Kakching","tengnoupal|Tengnoupal","kamjong|Kamjong","noney|Noney","pherzawl|Pherzawl"];        
        }else if(s1.value == "Meghalaya"){
        
            var optionArray = ["jaintia hills division|Jaintia Hills Division","khasi hills division|Khasi Hills Division","garo hill division|Garo Hills Division"];       
        }else if(s1.value == "Mizoram"){
        
            var optionArray = ["aizawl|Aizawl","kolasib|Kolasib","lawgtlai|Lawngtlai","lunglei|Lunglei","mamit|Mamit","siaha|Siaha","serchhip|Serchhip","champhai|Champhai"];
        }else if(s1.value == "Nagaland"){
        
            var optionArray = ["dimapur|Dimapur","kiphire|Kiphire","kohima|Kohima","longleng|longleng","mokokchung|mokokchung","mon|Mon","peren|Peren","phek|Phek","tuensang|Tuensang","wokha|Wokha","zunheboto|Zunheboto"];
        }else if(s1.value == "Odisha"){
        
            var optionArray = ["angul|Angul","boudh|Boudh","balangir|Balangir","bargarh|Bargarh","balasore|Balasore","bhadrak|Bhadrak","cuttack|Cuttack","debagarh|Debagarh","dhenkanal|Dhenkanal","ganjam|Ganjam","gajapati|Gajapati","jharsuguda|Jharsuguda","jaipur|Jajpur","jagatsinghapur|Jagatsinghapur","khordha|Khordha","kendujhar|Kendujhar","kalahandi|Kalahandi","kandhamal|Kandhamal","korapur|koraput","kendrapara|Kendrapara","malkangiri|Malkangiri","mayurbhanj|Mayurbhanj","nabarangpur|Nabarangpur","nuapada|Nuapada","nayagarh|Nayagarh","puri|Puri","rayagada|Rayagada","sambalpur|Sambalpur","subarnapur|Subarnapur","sundargarh|Sundargarh"];
        }else if(s1.value == "Puducherry"){
        
            var optionArray = ["karaikal|Karaikal","mahe|Mahe","pondicherry|Pondicherry","yanam|Yanam"];
        }else if(s1.value == "Punjab"){
        
            var optionArray = ["amritsar|Amritsar","barnala|Barnala","bathinda|Bathinda","faridkot|Faridkot","fategarh sahib|Fategarh Sahib","firozpur|Firozpur","fazilka|Fazilka","gurdaspur|Gurdaspur","hoshiarpur|Hoshiarpur","jalandhar|Jalandhar","kapurthala|Kapurthala","ludhiana|Ludhiana","mansa|Mansa","moga|Moga","sri muktsar sahib|Sri Muktsar Sahib","pathankot|Pathankot","patiala|Patiala","rupnagar|Rupnagar","sahbzada ajit singh nagar|Sahibzada Ajit Singh Nagar","sangrur|Sangrur","shahid bhagat singh nagar|Shahid Bhagat Singh Nagar","tarn taran|Tarn Taran"];
        }else if(s1.value == "Rajasthan"){
        
            var optionArray = ["ajmer|Ajmer","alwar|Alwar","banswara|Banswara","baran|Baran","barmer|Barmer","bharatpur|Bharatpur","bhilwara|Bhilwara","bikaner|Bikaner","bundi|Bundi","chittogarh|Chittogarh","churu|Churu","dausa|Dausa","dholpur|Dholpur","dungarpur|Dungarpur","hunamangarh|Hanumangarh","jaipur|Jaipur","jaisalmer|Jaisalmer","jalor|Jalor","jhalawar|Jhalawar","jhunjhunu|Jhunjhunu","jodhpur|Jodhpur","karauli|Karauli","kota|Kota","nagur|Nagur","pali|Pali","pratapgarh|Pratapgarh","rajsamand|Rajsamand","sawai madhopur|Sawai Madhopur","sikar|Sikar","sirohi|Sirohi","sri ganganagar|Sri Ganganagar","tonk|Tonk","udaipur|Udaipur"];
        }else if(s1.value == "Sikkim"){
        
            var optionArray = ["east sikkim|East Sikkim","north sikkim|North Sikkim","south sikkim|South Sikkim","west sikkim|West Sikkim"];
        }else if(s1.value == "Tamil Nadu"){
        
            var optionArray = ["ariyalur|Ariyalur","chennai|Chennai","coimbatore|Coimbatore","cuddalore|Cuddalore","dharmapuri|Dharmapuri","dindigul|Dindigul","erode|Erode","kanchipuram|Kanchipuram","kanniyakumri|Kanniyakumari","karur|Karur","krishnagiri|Krishnagiri","madurai|Madurai","nagapattinam|Nagapattinam","namakkal|Namakkal","the niligiris|The Niligiris","perambalur|Perambalur","puddukkottai|Puddukkottai","ramanathapuram|Ramanathapuram","salem|Salem","sivaganga|Sivaganga","thanjavur|Thanjavur","thoothukudi|Thoothukudi","tiruchirappalli|Tiruchirappalli","tirunelveli|Tirunelveli","tiruppur|Tiruppur","tiruvallur|Tiruvallur","tirruvanamalai|Tirruvanamalai","tiruvarur|Tiruvarur","vellore|Vellore","viluppuram|Viluppuram","virudhunagar|Virudhunagar"];
        }else if(s1.value == "Telangana"){
        
            var optionArray = ["adilabad|Adilabad","bhadradri kothagudem|Bhadradri Kothagudem","hyderabad|Hyderabad","jagityala|Jagital","jangaon|Jangaon","jayashankar bhupalapally|Jayashankar Bhupalapally","jogulamba gadwal|Jogulamba Gadwal","kamareddy|Kamareddy","karimnagar|Karimnagar","khammam|Khammam","kumarambheem asifabad|Kumarambheem Asifabad","mahabubabad|Mahabubabad","mahbubnagar|Mahbubnagar","mancherial|Mancherial","medak|Medak","medchal–malkajgiri|Medchal–Malkajgiri","nagarkurnool|Nagarkurnool","nalgonda|Nalgonda","nirmal|Nirmal","nizamabad|Nizamabad","peddapalli|Peddapalli","rajanna sircilla|Rajanna Sircilla","ranga reddy|Ranga Reddy","sangareddy|Sangareddy","siddipet|Siddipet","suryapet|Suryapet","vikarabad|Vikarabad","wanaparthy|Wanaparthy","warangal rural|Warangal Rural","warangal urban|Warangal Urban","yadadri bhuvanagiri|Yadadri Bhuvanagiri"];
        }else if(s1.value == "Tripura"){
        
            var optionArray = ["dhalai|Dhalai","north tripura|North Tripura","south tripura|South Tripura","west tripura|West Tripura"];
        }else if(s1.value == "Uttar Pradesh"){
        
            var optionArray = ["agra division|Agra Division","aligarh division|Aligarh Division","allahabad|Allahabad Division","bareilly division|Bareilly Division","basti division|Basti division","chitrakoot division|Chitrakoot Division","devipatan|Devipatan Division","faizabad division|Faizabad Division","gorakhpur division|Gorakhpur Division","jhansi division|Jhansi Division","kanpur division|Kanpur Division","lucknow division|Lucknow Division","meerut division|Meerut Division","mirzapur division|Mirzapur Division","moradabad division|Moradabad Division","varanasi division|Varanasi Division"];
        }else if(s1.value == "Uttarakhand"){
        
            var optionArray = ["almora|Almora","bageshwar|Bageshwar","chamoli|Chamoli","champawat|Champawat","dehradun|Dehradun","haridwar|Haridwar","nainital|Nainital","pauri garhwal|Pauri Garhwal","pithoragarh|pithoragarh","rudraprayag|Rudraprayag","tehri garhwal|Tehri Garhwal","udham singh nagar|Udham Singh Nagar","uttarkashi|Uttarkashi"];
        }else if(s1.value == "West Bengal"){
        
            var optionArray = ["alipurduar|Alipurduar","bankura|Bankura","bardhaman|Bardhaman","birbhum|Birbhum","cooch Behar|Cooch Behar","dakshin dinajpur|Dakshin Dinajpur","darjeeling|Darjeeling","hooghly|Hooghly","howrah|Howrah","jalpaiguri|Jalpaiguri","kolkata|Kolkata","maldah|Maldah","murshidabad|Murshidabad","nadia|Nadia","north 24 parganas|North 24 Parganas","paschim medinipur|Paschim Medinipur","purba medinipur|Purba Medinipur","purulia|Purulia","south 24 parganas|South 24 Parganas","uttar dinajpur|Uttar Dinajpur"];
        }   
        for(var option in optionArray)
        {
            var pair = optionArray[option].split("|");
            var newOption = document.createElement("option");
             newOption.value = pair[0];
             newOption.innerHTML = pair[1];
             s2.options.add(newOption);          
        
        }
        }
</script>
</head>
<style>
nav {
	width:40%;
	float:right;
	font-size:18px;
	padding:20px;
}
nav ul {
	list-style-type:none;
}
nav li a {
	float:left;
	color: #000; /*change the color*/
	margin-right:10px;
	padding: 8px 16px;
	text-decoration: none;
}
nav li a:hover:not(.active) {
    background-color: #555;
    color:white;
}
nav li a.active {
    background-color: #4CAF50;
    color: white;
}
nav1 {
	font-size:18px;
}

nav1 ul {
	list-style-type:none;
    width: 200px;
    position: fixed;
	height: 100%;
    overflow: auto;
}

nav1 li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
    margin:10px;
}

nav1 li a:hover:not(.active) {
    background-color: #555;
    color:white;
}
nav1 li a.active {
    background-color: #4CAF50;
    color: white;
}

h1 {
	background-color: white;
	color: #4CAF50;
	font-family: Georgia;
	font-size:30px;
}

p {
    background-color: white;
    color:black;
    padding:1px;
    border-radius:20px;
}

input[type=text], select {
    width: 100%;
    padding: 10px 15px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 10%;
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    margin: 4px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

#example2 p {
    font-family: Courier New;
    background-color: #555;
    color:white;
    padding:20px;
    border-radius:20px;
}


</style>
<link rel="shortcut icon" href="icon.ico" />
<body>

<img src="medidrop.jpg" alt="Medidrop" style="width:220px;height:100px; padding:20px;">

<nav>
    <ul>
	<li><a href="home1.php">Home</a></li>
	<li><a href="about1.php">About Us</a></li>
	<li><a href="contact1.php">Contact Us</a></li>
	<li><a href="feedback.php">Feedback</a></li>
    </ul>
</nav>

<nav1>
	<ul>
	<li><a class="active" href="finddonor.php">Find Donor</a></li>
	<li><a href="postbloodrequest.php">Post Blood Request</a></li>
	<li><a href="blooddonationfacts1.php">Blood Donation Facts</a></li>
	<li><a href="whocancan't1.php">Who Can/Can't Donate</a></li>
    <li><a href="request1.php">Blood Requests</a></li>
    <li><a href="home.php">Logout</a></li>
	</ul>
</nav1>

<div style="margin-left:25%;">

<h1>Find a Donor</h1>
<form action="" method="POST">

<fieldset>



<p>State :
    <select id="slct1" name="slct1" onchange="populate(this.id,'slct2')">
    <option value=---select--->---select---</option>
    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
    <option value="Andhra Pradesh">Andhra Pradesh</option>
    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
    <option value="Bihar">Bihar</option>
    <option value="Chandigarh">Chandigarh</option>
    <option value="Chhattisgarh">Chhattisgarh</option>
    <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
    <option value="Daman and Diu">Daman and Diu</option>
    <option value="National Capital Territory of Delhi">National Capital Territory of Delhi</option>
    <option value="Goa">Goa</option>
    <option value="Gujarat">Gujarat</option>
    <option value="Haryana">Haryana</option>
    <option value="Himachal Pradesh">Himachal Pradesh</option>
    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
    <option value="Jharkhand">Jharkhand</option>
    <option value="Karnataka">Karnataka</option>
    <option value="Kerala">Kerala</option>
    <option value="Lakshadweep">Lakshadweep</option>
    <option value="Madhya Pradesh">Madhya Pradesh</option>
    <option value="Maharashtra">Maharashtra</option>
    <option value="Manipur">Manipur</option>
    <option value="Meghalaya">Meghalaya</option>
    <option value="Mizoram">Mizoram</option>
    <option value="Nagaland">Nagaland</option>
    <option value="Odisha">Odisha</option>
    <option value="Puducherry">Puducherry</option>
    <option value="Punjab">Punjab</option>
    <option value="Rajasthan">Rajasthan</option>
    <option value="Sikkim">Sikkim</option>
    <option value="Tamil Nadu">Tamil Nadu</option>
    <option value="Telangana">Telangana</option>
    <option value="Tripura">Tripura</option>
    <option value="Uttar Pradesh">Uttar Pradesh</option>
    <option value="Uttarakhand">Uttarakhand</option>
    <option value="West Bengal">West Bengal</option>
    </select>
<p>

<p>District :
    <select id="slct2" name="slct2"></select>
<p>

<p>Blood Group :
    <select name="BloodGroup">
    <option value=---select--->---select---</option>
    <option value="A+">A+</option>
    <option value="A−">A−</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
    </select>
</p>    

<aside><input type="submit" value="Submit"></aside>
<small>
</small>

</fieldset>


<?php
if(count($_POST)>0) {
    require_once("dbh.php");
    
    $query = "SELECT * FROM `registration form` WHERE BloodGroup = '" . $_POST["BloodGroup"] . "' AND slct1 = '" . $_POST["slct1"] . "' AND slct2 = '" . $_POST["slct2"] . "'";
    $runQuery = mysqli_query($conn,$query);
    while ($row = mysqli_fetch_array($runQuery, MYSQLI_NUM)) {
        
        ?>
    <div id="example2">
<fieldset>
<p>Full Name : <?php echo $row[1];?></p>

<p>Blood Group : <?php echo $row[2];?>
</p>

<p>Contact Number : +91 <?php echo $row[5];?></p>

<p>State : <?php echo $row[6];?>
</p>

<p>District : <?php echo $row[7];?>
</p>

</div>
</fieldset>    
  <?php  }
                   }
?>

</body>
</html>



