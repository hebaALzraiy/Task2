<!DOCTYPE html>
<html>
<head>


 <style>

.form-inline{
  display: inline;
 

}
.form-inline input {
  margin: 10px;
  padding: 5px;

}

.form-inline button {
  padding: 10px ;
  margin:20px;
  background: #1a619a;
  border: 1px solid #1a619a;
  box-shadow: 0 5px 25px rgba(0,0,0,.5);
  color: #fff;
  width: 100px;
  height: 40px;
}
  
label {
  color: #1a619a;
  font-weight: bold;
  font-size: 20px;
}

.box1 .box2 select {
  background: #3c5d78;
  color: #fff;
  padding: 10px;
  width: 100px;
  height: 30px;
  border: none;
  font-size: 20px; 
  
}
.box1  {
  float: left;
  padding-left:50px;
  padding-top:20px ;

}
.rad{
  float: left;
  padding-left:50px;
  padding-top:17px ;


}
.box2  {
  float: left;
  padding-top:20px ;


  padding-left: 50px;
}



table, th, td {
  border: 3px solid #3c5d78;
  border-collapse: collapse;
  text-align:center;
}
h2{
  color: #1a619a;
}

</style>
<title>task</title>

</head>
<body>
<form class="form-inline"  method="POST" action = "submit">
  @csrf
  <div class="box1">
  <label   for="item">Item:</label>
 
  <select  name="item" id="item">
    <option value="solar1">solar1</option>
    <option value="solar2">solar2</option>
    <option value="solar3">solar3</option>
    <option value="solar4">solar4</option>
  </select>
</div>
<div class="rad">
  <label  for="quantity">Quantity:</label>
  <label>
    <input class="inp" type="radio" name="quantity" value="liters" checked="checked">
    liters
  </label>
  <label >
    <input  class="inp"  type="radio" name="quantity" value="Amount">
    Amount
  </label>
</div>
  <div class="box2" >
 <label   for="driver">Driver:</label>
  <select name="driver" id="driver">
    <option value="Omar">Omar</option>
    <option value="Ali">Ali</option>
    <option value="Ahmed">Ahmed</option>

  </select>
</div>
  <br><br>


  <button type="submit" >submit</button>
</form>
  <hr>
  <h2>Previous orders:</h2>
  <table style="width:100%">
  <tr bgcolor=#1a619a >

    <td>Number</td>
    <td>Item</td>
    <td>Quantity</td>
    <td>Driver</td>
    <td>Date</td>
    <td>status</td>

    
  </tr>
  
  @foreach($order as $orders)
  <tr>
    <td>{{$orders['id']}}</td>
    <td>{{$orders['item']}}</td>
    <td>{{$orders['quantity']}}</td>
    <td>{{$orders['driver']}}</td>
    <td>{{$orders['date']}}</td>


<td> 
<?php if($orders['status'] == '1'){ ?> 

<a href="{{url('/statusupdate',$orders['id'])}}" class="btn btn-success">Received</a>

<?php }else{ ?> 

<a  class="btn btn-danger">stopping</a>

<?php } ?>
</td>
  </tr>
  @endforeach
  

</table>

</body>
</html>