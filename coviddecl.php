   <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
  background-color: #C7D3D4FF;
}

* {
  box-sizing: border-box;
}
.col-25 {
  -ms-flex: 25%; 
  flex: 25%;
   padding: 0 16px;
}
span.price{
  float: right;
  color: grey;
}

   .col-25 {
    margin-bottom: 20px;
    border-bottom:1px  black;
}

.topnav {
  overflow: hidden;
  background-color:#5CDB95 ;
  border-bottom: 1px  solid black;
  margin-top: 40px;
}



.sal{
  text-align: center;
   background-color: #5CDB95; 
}

.h{
  height: 550px;
  width: 600px;
  border:1px solid black;
  border-radius: 30px;
  margin-left: 300px;
  background-color: #5CDB95;
}
.next{
  position: absolute;
  float: right;
  margin-left: 450px;
  margin-top: -15px;
}
.button{
  text-align: center;


}
.btn{
  background-color: tomato;
  width: 100px;
  margin-top: 30px;
}
.a{
  border-top: 1px solid black;
  margin-top: 10px;
}
</style>
<body>
  <div style="background-image: url('back.png.jpg');">
    <div class="h">
<div class="topnav">
<div class="sal"><h1>Salon At Home</h1></div>
</div>

 <div class="col-25">
    <div class="container">
      <h2 style="text-align: center;"><b>I am safe and healthy</b></h2>
      <p>COVID-19 Self Health Declaration:Your honest response will ensure your safety as well as that of our professionals</p>
    </div>
  </div>
  <div class="a">
    <ul>
    <li> I am not suffering from flu-like symptoms:fever,cough,breathlessness,sore throat etc.</li>
    <li>I have not travelled domestically or internationally in last 14 days</li>
    <li>I have not come in contact with an COVID-19 case in last 14 days</li>
    <li>I understand that while serve on door is taking all necessary safety and hygeine precautions .i can't be held liable in the unfortunate event that a customer or professional is diagnosed with COVID-19</li>
  </ul>
   <input type="radio" id="agree" name="agree" value="click">
    <label for="agree"><strong>Click here to agree</strong></label>
  </div>
  <div class="button" >
     <input type="submit" value="I agree" class="btn">
  </div>
</div>
</body>
</head>
</html>