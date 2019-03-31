<?php echo form_open('users/register'); ?>
<div class="error">
   <?php echo validation_errors(); ?>
</div>
<h2>Remplissez votre formulaire!</h2>
<p class="bg-primary"  style="color:white; padding: 10px; font-size: 22px;"> choix:</p>
<div class="form-group">
   <select name="master_choix" type="text" class="form-control" placeholder="" id="master_choix" required>
      <option selected>-</option>
			<?php foreach($masters as $master) {
      	echo "<option value=\"$master->id\" style=\"\">$master->titre</option>";
	 		} ?>
   </select>
</div>
<p class="bg-primary" style="color:white; padding: 10px; font-size: 22px;"> Identification:</p>
<div class="row">
   <div class="col-md-6">
      <div class="form-group">
         <label for="cin">N° C.I.N :</label>
         <input type="text" class="form-control" placeholder="" id="cin" name="cin" required>
      </div>
   </div>
   <!--  col-md-6   -->
   <div class="col-md-6">
      <div class="form-group">
         <label for="last">Nom:</label>
         <input type="text" class="form-control" placeholder="" id="last" name="nom" required>
      </div>
   </div>
   <!--  col-md-6   -->
</div>
<div class="row">
   <div class="col-md-6">
      <div class="form-group">
         <label for="first">Prénom:</label>
         <input type="text" class="form-control" placeholder="" id="first" name="prenom"required>
      </div>
   </div>
   <!--  col-md-6   -->
   <div class="col-md-6">
      <div class="form-group">
         <label for="last">Nom de jeune fille:</label>
         <input type="text" class="form-control" placeholder="" id="last" name="njf">
      </div>
   </div>
   <!--  col-md-6   -->
</div>
<div class="row">
   <div class="col-md-6">
      <div class="form-group">
         <label for="last">Sexe:</label></br>
         <label>
         <input type="radio" name="m" id="m" value="Masculin" >Masculin
         </label>
         <label>
         <input type="radio" name="f" id="f" value="Féminin" >Féminin
         </label>
      </div>
   </div>
   <!--  col-md-6   -->
   <div class="col-md-6">
      <div class="form-group">
         <label for="phone">Nationalité:</label>
         <select name="nationalite" class="form-control selectpicker" >
            <option value="1">tunisie</option>
            <option value="2">Sud-africaine</option>
            <option value="3">Albanaise</option>
            <option value="4">Algerienne</option>
            <option value="5">Allemande</option>
            <option value="6">Andorrane</option>
            <option value="7">Angolaise</option>
            <option value="8">Britannique</option>
            <option value="9">Antiguaise et barbudienne</option>
            <option value="10">Neerlandaise</option>
            <option value="11">Saoudienne</option>
            <option value="12">Argentine</option>
            <option value="13">Armenienne</option>
            <option value="14">Australienne</option>
            <option value="15">Autrichienne</option>
            <option value="16">Azerbaïdjanaise</option>
            <option value="17">Bahamienne</option>
            <option value="18">Bahreinienne</option>
            <option value="19">Bangladaise</option>
            <option value="20">Barbadienne</option>
            <option value="21">Bielorusse</option>
            <option value="22">Belge</option>
            <option value="23">Belizienne</option>
            <option value="24">Beninoise</option>
            <option value="25">Bhoutanaise</option>
            <option value="26">Birmane</option>
            <option value="27">Bolivienne</option>
            <option value="28">Bosnienne</option>
            <option value="29">Botswanaise</option>
            <option value="30">Bresilienne</option>
            <option value="31">Bruneienne</option>
            <option value="32">Bulgare</option>
            <option value="33">Burkinabe</option>
            <option value="34">Burundaise</option>
            <option value="35">Cambodgienne</option>
            <option value="36">Camerounaise</option>
            <option value="37">Canadienne</option>
            <option value="38">Cap-verdienne</option>
            <option value="39">Centrafricaine</option>
            <option value="40">Chilienne</option>
            <option value="41">Chinoise</option>
            <option value="42">Chypriote</option>
            <option value="43">Colombienne</option>
            <option value="44">Comorienne</option>
            <option value="45">Congolaise</option>
            <option value="46">Congolaise (r.d.)</option>
            <option value="47">Neo-zelandaise</option>
            <option value="48">Nord-coréenne</option>
            <option value="49">Sud-coréenne</option>
            <option value="50">Costaricaine</option>
            <option value="51">Ivoirienne</option>
            <option value="52">Croate</option>
            <option value="53">Cubaine</option>
            <option value="54">Danoise</option>
            <option value="55">Djiboutienne</option>
            <option value="56">Dominicaine</option>
            <option value="57">Dominiquaise</option>
            <option value="58">Egyptienne</option>
            <option value="59">Salvadorienne</option>
            <option value="60">Emirienne</option>
            <option value="61">Equatorienne</option>
            <option value="62">Erythreenne</option>
            <option value="63">Espagnole</option>
            <option value="64">Estonienne</option>
            <option value="65">Americaine</option>
            <option value="66">Ethiopienne</option>
            <option value="67">Fidjienne</option>
            <option value="68">Finlandaise</option>
            <option value="69">Francaise</option>
            <option value="70">Gabonaise</option>
            <option value="71">Gambienne</option>
            <option value="72">Georgienne</option>
            <option value="73">Ghaneenne</option>
            <option value="74">Hellenique</option>
            <option value="75">Grenadienne</option>
            <option value="76">Guatemalteque</option>
            <option value="77">Guineenne</option>
            <option value="78">Equato-guineenne</option>
            <option value="79">Bissao-guineenne</option>
            <option value="80">Guyanienne</option>
            <option value="81">Haïtienne</option>
            <option value="82">Hondurienne</option>
            <option value="83">Hongroise</option>
            <option value="84">Indienne</option>
            <option value="85">Indonesienne</option>
            <option value="86">Irakienne</option>
            <option value="87">Iranienne</option>
            <option value="88">Irlandaise</option>
            <option value="89">Islandaise</option>
            <option value="90">Israëlienne</option>
            <option value="91">Italienne</option>
            <option value="92">Jamaïcaine</option>
            <option value="93">Japonaise</option>
            <option value="94">Jordanienne</option>
            <option value="95">Kazakhstanaise</option>
            <option value="96">Kenyane</option>
            <option value="97">Kirghize</option>
            <option value="98">Kiribatienne</option>
            <option value="99">Kossovienne</option>
            <option value="100">Koweitienne</option>
            <option value="101">Laotienne</option>
            <option value="102">Lesothane</option>
            <option value="103">Lettone</option>
            <option value="104">Libanaise</option>
            <option value="105">Liberienne</option>
            <option value="106">Libyenne</option>
            <option value="107">Liechtensteinoise</option>
            <option value="108">Lituanienne</option>
            <option value="109">Luxembourgeoise</option>
            <option value="110">Macedonienne</option>
            <option value="111">Malgache</option>
            <option value="112">Malaisienne</option>
            <option value="113">Malawienne</option>
            <option value="114">Maldivienne</option>
            <option value="115">Malienne</option>
            <option value="116">Maltaise</option>
            <option value="117">Marocaine</option>
            <option value="118">Marshallaise</option>
            <option value="119">Mauricienne</option>
            <option value="120">Mauritanienne</option>
            <option value="121">Mexicaine</option>
            <option value="122">Micronesienne</option>
            <option value="123">Moldave</option>
            <option value="124">Monegasque</option>
            <option value="125">Mongole</option>
            <option value="126">Montenegrine</option>
            <option value="127">Mozambicaine</option>
            <option value="128">Namibienne</option>
            <option value="129">Nauruane</option>
            <option value="130">Nepalaise</option>
            <option value="131">Nicaraguayenne</option>
            <option value="132">Nigerienne</option>
            <option value="133">Nigeriane</option>
            <option value="134">Norvegienne</option>
            <option value="135">Omanaise</option>
            <option value="136">Ougandaise</option>
            <option value="137">Ouzbeke</option>
            <option value="138">Pakistanaise</option>
            <option value="139">Palau</option>
            <option value="140">Panameenne</option>
            <option value="141">Papouane-neoguineenne</option>
            <option value="142">Paraguayenne</option>
            <option value="143">Peruvienne</option>
            <option value="144">Philippine</option>
            <option value="145">Polonaise</option>
            <option value="146">Portoricaine</option>
            <option value="147">Portugaise</option>
            <option value="148">Qatarienne</option>
            <option value="149">Roumaine</option>
            <option value="150">Russe</option>
            <option value="151">Rwandaise</option>
            <option value="152">Saint-lucienne</option>
            <option value="153">Kittitienne-et-nevicienne</option>
            <option value="154">Saint-marinaise</option>
            <option value="155">Saint-vincentaise-et-grenadine</option>
            <option value="156">Salomonaise</option>
            <option value="157">Samoane</option>
            <option value="158">Santomeenne</option>
            <option value="159">Senegalaise</option>
            <option value="160">Serbe</option>
            <option value="161">Serbie et montenegro</option>
            <option value="162">Seychelloise</option>
            <option value="163">Sierra-leonaise</option>
            <option value="164">Singapourienne</option>
            <option value="165">Slovaque</option>
            <option value="166">Slovene</option>
            <option value="167">Somalienne</option>
            <option value="168">Soudanaise</option>
            <option value="169">Sri-lankaise</option>
            <option value="170">Suedoise</option>
            <option value="171">Suisse</option>
            <option value="172">Surinamaise</option>
            <option value="173">Swazie</option>
            <option value="174">Syrienne</option>
            <option value="175">Tadjike</option>
            <option value="176">Taiwan</option>
            <option value="177">Tanzanienne</option>
            <option value="178">Tchadienne</option>
            <option value="179">Tcheque</option>
            <option value="180">Palestinienne</option>
            <option value="181">Thaïlandaise</option>
            <option value="182">Est-timoraise</option>
            <option value="183">Togolaise</option>
            <option value="184">Tonguienne</option>
            <option value="185">Trinidadienne</option>
            <option value="186">Tunisienne</option>
            <option value="187">Turkmene</option>
            <option value="188">Turque</option>
            <option value="189">Tuvaluane</option>
            <option value="190">Ukrainienne</option>
            <option value="191">Uruguayenne</option>
            <option value="192">Vanuatuane</option>
            <option value="193">Venezuelienne</option>
            <option value="194">Vietnamienne</option>
            <option value="195">Yemenite</option>
            <option value="196">Zambienne</option>
            <option value="197">Zimbabweenne</option>
         </select>
      </div>
   </div>
   <!--  col-md-6   -->
</div>
<!--  row   -->
<div class="row">
   <div class="col-md-6">
      <div class="form-group">
         <label for="date">Date de naissance:</label>
         <div class='input-group date' id='datetimepicker1' >
            <input type='date' name="date" class="form-control"  required/>
            <!-- <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"><i class="far fa-2x fa-calendar-alt"></i></span>
               </span> -->
         </div>
      </div>
   </div>
   <!--  col-md-6   -->
   <div class="col-md-6">
      <div class="form-group">
         <label for="lieu">Lieu de naissance:</label>
         <input type="text" class="form-control" id="lieu" placeholder="" name="lieu" required>
      </div>
   </div>
   <!--  col-md-6   -->
</div>
<p class="bg-primary" style="color:white; padding: 10px; font-size: 22px;">Informations de localisation de l'étudiant:</p>
<div class="row">
   <div class="col-md-6">
      <div class="form-group">
         <label >Pays:</label>
         <div class="selectContainer">
            <div class="input-group">
               <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
               <select name="pays" class="form-control selectpicker" >
                  <option value="1">tunisie</option>
                  <option value="2">Sud-africaine</option>
                  <option value="3">Albanaise</option>
                  <option value="4">Algerienne</option>
                  <option value="5">Allemande</option>
                  <option value="6">Andorrane</option>
                  <option value="7">Angolaise</option>
                  <option value="8">Britannique</option>
                  <option value="9">Antiguaise et barbudienne</option>
                  <option value="10">Neerlandaise</option>
                  <option value="11">Saoudienne</option>
                  <option value="12">Argentine</option>
                  <option value="13">Armenienne</option>
                  <option value="14">Australienne</option>
                  <option value="15">Autrichienne</option>
                  <option value="16">Azerbaïdjanaise</option>
                  <option value="17">Bahamienne</option>
                  <option value="18">Bahreinienne</option>
                  <option value="19">Bangladaise</option>
                  <option value="20">Barbadienne</option>
                  <option value="21">Bielorusse</option>
                  <option value="22">Belge</option>
                  <option value="23">Belizienne</option>
                  <option value="24">Beninoise</option>
                  <option value="25">Bhoutanaise</option>
                  <option value="26">Birmane</option>
                  <option value="27">Bolivienne</option>
                  <option value="28">Bosnienne</option>
                  <option value="29">Botswanaise</option>
                  <option value="30">Bresilienne</option>
                  <option value="31">Bruneienne</option>
                  <option value="32">Bulgare</option>
                  <option value="33">Burkinabe</option>
                  <option value="34">Burundaise</option>
                  <option value="35">Cambodgienne</option>
                  <option value="36">Camerounaise</option>
                  <option value="37">Canadienne</option>
                  <option value="38">Cap-verdienne</option>
                  <option value="39">Centrafricaine</option>
                  <option value="40">Chilienne</option>
                  <option value="41">Chinoise</option>
                  <option value="42">Chypriote</option>
                  <option value="43">Colombienne</option>
                  <option value="44">Comorienne</option>
                  <option value="45">Congolaise</option>
                  <option value="46">Congolaise (r.d.)</option>
                  <option value="47">Neo-zelandaise</option>
                  <option value="48">Nord-coréenne</option>
                  <option value="49">Sud-coréenne</option>
                  <option value="50">Costaricaine</option>
                  <option value="51">Ivoirienne</option>
                  <option value="52">Croate</option>
                  <option value="53">Cubaine</option>
                  <option value="54">Danoise</option>
                  <option value="55">Djiboutienne</option>
                  <option value="56">Dominicaine</option>
                  <option value="57">Dominiquaise</option>
                  <option value="58">Egyptienne</option>
                  <option value="59">Salvadorienne</option>
                  <option value="60">Emirienne</option>
                  <option value="61">Equatorienne</option>
                  <option value="62">Erythreenne</option>
                  <option value="63">Espagnole</option>
                  <option value="64">Estonienne</option>
                  <option value="65">Americaine</option>
                  <option value="66">Ethiopienne</option>
                  <option value="67">Fidjienne</option>
                  <option value="68">Finlandaise</option>
                  <option value="69">Francaise</option>
                  <option value="70">Gabonaise</option>
                  <option value="71">Gambienne</option>
                  <option value="72">Georgienne</option>
                  <option value="73">Ghaneenne</option>
                  <option value="74">Hellenique</option>
                  <option value="75">Grenadienne</option>
                  <option value="76">Guatemalteque</option>
                  <option value="77">Guineenne</option>
                  <option value="78">Equato-guineenne</option>
                  <option value="79">Bissao-guineenne</option>
                  <option value="80">Guyanienne</option>
                  <option value="81">Haïtienne</option>
                  <option value="82">Hondurienne</option>
                  <option value="83">Hongroise</option>
                  <option value="84">Indienne</option>
                  <option value="85">Indonesienne</option>
                  <option value="86">Irakienne</option>
                  <option value="87">Iranienne</option>
                  <option value="88">Irlandaise</option>
                  <option value="89">Islandaise</option>
                  <option value="90">Israëlienne</option>
                  <option value="91">Italienne</option>
                  <option value="92">Jamaïcaine</option>
                  <option value="93">Japonaise</option>
                  <option value="94">Jordanienne</option>
                  <option value="95">Kazakhstanaise</option>
                  <option value="96">Kenyane</option>
                  <option value="97">Kirghize</option>
                  <option value="98">Kiribatienne</option>
                  <option value="99">Kossovienne</option>
                  <option value="100">Koweitienne</option>
                  <option value="101">Laotienne</option>
                  <option value="102">Lesothane</option>
                  <option value="103">Lettone</option>
                  <option value="104">Libanaise</option>
                  <option value="105">Liberienne</option>
                  <option value="106">Libyenne</option>
                  <option value="107">Liechtensteinoise</option>
                  <option value="108">Lituanienne</option>
                  <option value="109">Luxembourgeoise</option>
                  <option value="110">Macedonienne</option>
                  <option value="111">Malgache</option>
                  <option value="112">Malaisienne</option>
                  <option value="113">Malawienne</option>
                  <option value="114">Maldivienne</option>
                  <option value="115">Malienne</option>
                  <option value="116">Maltaise</option>
                  <option value="117">Marocaine</option>
                  <option value="118">Marshallaise</option>
                  <option value="119">Mauricienne</option>
                  <option value="120">Mauritanienne</option>
                  <option value="121">Mexicaine</option>
                  <option value="122">Micronesienne</option>
                  <option value="123">Moldave</option>
                  <option value="124">Monegasque</option>
                  <option value="125">Mongole</option>
                  <option value="126">Montenegrine</option>
                  <option value="127">Mozambicaine</option>
                  <option value="128">Namibienne</option>
                  <option value="129">Nauruane</option>
                  <option value="130">Nepalaise</option>
                  <option value="131">Nicaraguayenne</option>
                  <option value="132">Nigerienne</option>
                  <option value="133">Nigeriane</option>
                  <option value="134">Norvegienne</option>
                  <option value="135">Omanaise</option>
                  <option value="136">Ougandaise</option>
                  <option value="137">Ouzbeke</option>
                  <option value="138">Pakistanaise</option>
                  <option value="139">Palau</option>
                  <option value="140">Panameenne</option>
                  <option value="141">Papouane-neoguineenne</option>
                  <option value="142">Paraguayenne</option>
                  <option value="143">Peruvienne</option>
                  <option value="144">Philippine</option>
                  <option value="145">Polonaise</option>
                  <option value="146">Portoricaine</option>
                  <option value="147">Portugaise</option>
                  <option value="148">Qatarienne</option>
                  <option value="149">Roumaine</option>
                  <option value="150">Russe</option>
                  <option value="151">Rwandaise</option>
                  <option value="152">Saint-lucienne</option>
                  <option value="153">Kittitienne-et-nevicienne</option>
                  <option value="154">Saint-marinaise</option>
                  <option value="155">Saint-vincentaise-et-grenadine</option>
                  <option value="156">Salomonaise</option>
                  <option value="157">Samoane</option>
                  <option value="158">Santomeenne</option>
                  <option value="159">Senegalaise</option>
                  <option value="160">Serbe</option>
                  <option value="161">Serbie et montenegro</option>
                  <option value="162">Seychelloise</option>
                  <option value="163">Sierra-leonaise</option>
                  <option value="164">Singapourienne</option>
                  <option value="165">Slovaque</option>
                  <option value="166">Slovene</option>
                  <option value="167">Somalienne</option>
                  <option value="168">Soudanaise</option>
                  <option value="169">Sri-lankaise</option>
                  <option value="170">Suedoise</option>
                  <option value="171">Suisse</option>
                  <option value="172">Surinamaise</option>
                  <option value="173">Swazie</option>
                  <option value="174">Syrienne</option>
                  <option value="175">Tadjike</option>
                  <option value="176">Taiwan</option>
                  <option value="177">Tanzanienne</option>
                  <option value="178">Tchadienne</option>
                  <option value="179">Tcheque</option>
                  <option value="180">Palestinienne</option>
                  <option value="181">Thaïlandaise</option>
                  <option value="182">Est-timoraise</option>
                  <option value="183">Togolaise</option>
                  <option value="184">Tonguienne</option>
                  <option value="185">Trinidadienne</option>
                  <option value="186">Tunisienne</option>
                  <option value="187">Turkmene</option>
                  <option value="188">Turque</option>
                  <option value="189">Tuvaluane</option>
                  <option value="190">Ukrainienne</option>
                  <option value="191">Uruguayenne</option>
                  <option value="192">Vanuatuane</option>
                  <option value="193">Venezuelienne</option>
                  <option value="194">Vietnamienne</option>
                  <option value="195">Yemenite</option>
                  <option value="196">Zambienne</option>
                  <option value="197">Zimbabweenne</option>
               </select>
            </div>
         </div>
      </div>
   </div>
   <!--  col-md-6   -->
   <div class="col-md-6">
      <div class="form-group">
         <label for="adressc">Adresse complete: </label>
         <input type="address" required class="form-control" id="adressc" placeholder="votre adresse ICI" name="adressc">
      </div>
   </div>
   <!--  col-md-6   -->
</div>
<!--  row   -->
<div class="row">
   <div class="col-md-6">
      <div class="form-group">
         <div class="form-group">
            <label >Gouvernorat:</label>
            <div class="selectContainer">
               <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                  <select name="gouvernourat" class="form-control selectpicker" >
                     <option value=""></option>
                     <option value="1">ariana</option>
                     <option value="2">béja</option>
                     <option value="3">ben arous</option>
                     <option value="4">bizerte</option>
                     <option value="5">gabès</option>
                     <option value="6">gafsa</option>
                     <option value="7">jendouba</option>
                     <option value="8">kairouan</option>
                     <option value="9">kasserine</option>
                     <option value="10">kébili</option>
                     <option value="11">le kef</option>
                     <option value="12">la manouba</option>
                     <option value="13">mahdia</option>
                     <option value="14">médenine</option>
                     <option value="15">monastir</option>
                     <option value="16">nabeul</option>
                     <option value="17">sfax</option>
                     <option value="18">sidi Bouzid</option>
                     <option value="19">siliana</option>
                     <option value="20">sousse</option>
                     <option value="21">tataouine</option>
                     <option value="22">tozeur</option>
                     <option value="23">tunis</option>
                     <option value="24">zaghouan</option>
                  </select>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="col-md-6">
      <div class="form-group">
         <label for="ville">Ville: </label>
         <input type="text" class="form-control" id="ville" placeholder=""name="ville" required>
      </div>
   </div>

</div>
<div class="row">
   <div class="col-md-6">
      <div class="form-group">
         <label for="first">Code postal:</label>
         <input type="number" class="form-control" placeholder="" id="first" name="codepostal" required>
      </div>
   </div>
   <!--  col-md-6   -->
   <div class="col-md-6">
      <div class="form-group">
         <label for="last">Téléphone:</label>
         <input type="number" class="form-control" placeholder="" id="last" name="telephone" required>
      </div>
   </div>
   <!--  col-md-6   -->
</div>
<div class="row">
   <div class="col-md-6">
      <div class="form-group">
         <label for="first">Adresse e-mail:</label>
         <input type="text" class="form-control" placeholder="" id="first" name="email" required>
      </div>
   </div>
   <br>
   <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
</div>
<?php echo form_close(); ?>   
<script>
   /*
      $(function () {
      var bindDatePicker = function() {
      $("#datetimepicker1").datetimepicker({
       disabledTimeIntervals: 'true'
      }).on("change",function (e) {
      // check if the date is correct. We can accept dd-mm-yyyy and yyyy-mm-dd.
      // update the format if it's <yyyy-mm-dd$>conso</yyyy-mm-dd$>
      
      console.log("$(this).val(date)", e.target.value)
      var date = parseDate($(this).val());
      $(this).val(date);
      });
      }
      
      
      
      var parseDate = function(value) {
      var m = value.match(/^(\d{1,2})(\/|-)?(\d{1,2})(\/|-)?(\d{4})$/);
      if (m)
      value = m[5] + '-' + ("00" + m[3]).slice(-2) + '-' + ("00" + m[1]).slice(-2);
    
      return value;
      }
      
      bindDatePicker();
      });
      */
</script>
