<?php
 include ("header.php");
 ?>
 <div class="loginContainer">
   <input class="login" type="button" value="Login" onclick="document.location.href='login.php'"/>
 </div>

 <form id = "form">
 <fieldset class = "fieldset1">
   <legend class = "legend1">Renter(s) Information</legend>
     <label>How many people will be attending? <input type = "number"/></label>

     <br /><br />

     <label>Smoker?</label>
         <input type = "radio" name = "smoker" value = "yes"/> Yes
         <input type = "radio" name = "smoker" value = "no"/> No

     <br /><br />

     <label>Any Pets? </label>
         <br /> <input type = "checkbox" name = "pets" value = "cat"/> Cat(s)
         <br /> <input type = "checkbox" name = "pets" value = "dog"/> Dog(s)
         <br /> <input type = "checkbox" name = "pets" value = "other"/> Other
     <label>Specify: <input type = "text"/> </label>
         <br /> <input type = "checkbox" name = "pets" value = "none"/> No Pets

     <br /><br />

 </fieldset>

     <br />

 <fieldset class = "fieldset2">
   <legend class = "legend2"> What are you looking for?</legend>
     <ul>
       <li><label>Number of Bathrooms/Bedrooms: </label> <br />
                 <input type = "checkbox" name = "bath/bed" value = "12"/> ½
                 <input type = "checkbox" name = "bath/bed" value = "13"/> ⅓
                 <input type = "checkbox" name = "bath/bed" value = "14"/> ¼
                 <input type = "checkbox" name = "bath/bed" value = "25" id = "twofive"/> ⅖
       </li>
     </ul>

     <ul>
       <li><label>Do you have preferred locations? </label> <br />
           <input type = "checkbox" name = "locations" value = "MT"/> Mont-Tremblant
           <input type = "checkbox" name = "locations" value = "Lau"/> Laurentides
                 <input type = "checkbox" name = "locations" value = "Mag"/> Magog
                 <input type = "checkbox" name = "locations" value = "Gat"/> Gatineau
                 <input type = "checkbox" name = "locations" value = "QC" id = "qc"/> Quebec City
                 <input type = "checkbox" name = "locations" value = "D/C"/> Don't care
       </li>
     </ul>

     <ul>
       <li><label>Price Range/Weekend </label> <br />
            <select name = "price">
             <option value = "500"> &lt;500$ </option>
             <option value = "500-1000"> 500-1000$ </option>
             <option value = "1000-5000"> 1000-5000$</option>
             <option value = "noLim"> No Price Limit </option>
             </select>
       </li>
     </ul>

     <ul>
       <li><label>Would be nice to have: </label> <br />
                 <input type = "checkbox" name = "nice" value = "FP"/> Fire Place
                 <input type = "checkbox" name = "nice" value = "LiB"/> Laundromat in building
                 <input type = "checkbox" name = "nice" value = "BBQ"/> BBQ
                 <input type = "checkbox" name = "nice" value = "OP"/> Outdoor Parking
                 <input type = "checkbox" name = "nice" value = "Balc"/> Balcony
                 <input type = "checkbox" name = "nice" value = "WF"/> Water Front
       </li>
     </ul>
 </fieldset>

</form>

 <p> <strong> Let's see what we can find... </strong> </p>

 <input type = "button" value = "Search" onclick = 'showSuggestion()'/>
 <input type = "reset" value = "Start Over" onclick = 'formReset()'/>

<script src="Q4.js"></script>

<?php
 include ("footer.php");
 ?>
