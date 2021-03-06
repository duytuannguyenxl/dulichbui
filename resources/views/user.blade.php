@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0" style="background-image: url('../uploads/users/cover_photo/{{$id->cover_photo}}');background-size: cover;background-attachment:scroll;">
        	<div style="height:200px;" ></div>
        	<div class="row">
				<div class="col-md-4">
			        <img src="{{ url('/uploads/users/avatar_photo')}}/{{$id->avatar_photo}}" alt="Thumbnail Image" class="img-thumbnail">
				</div>
			</div>
			<div style="height:20px;" ></div>
        </div>

        <div class="col-md-12 col-md-offset-0 section-gray">
			@if($id->id==Auth::id())
        	<div class="col-sm-9 col-sm-offset-0">
            @else
            <div class="col-sm-4 col-sm-offset-0"></div>
            <div class="col-sm-6 col-sm-offset-0">
            @endif
    	{{-- <ul class="nav nav-tabs"> --}}
		       <ul class="nav nav-pills ct-orange" >
		       	
			    <li class="active" ><a data-toggle="tab" href="#profile">Profile</a></li>
			    <li><a data-toggle="tab" href="#myplan">Own Tour</a></li>
			    <li><a data-toggle="tab" href="#myfollow">Follow Tour</a></li>
			    <li><a data-toggle="tab" href="#myjoin">Join Tour</a></li>
			    
			  </ul>
	  		</div>
            @if($id->id==Auth::id())
	  		<div class="col-sm-3 col-sm-offset-0" style="text-align:right">              
	  			<button class="btn btn-warning" data-toggle="modal" data-target="#myModal">Edit Profile</button>
                {{-- <a href="{{ url('/tour_create') }}" class="btn btn-warning">Create Plan</a> --}}
                <button class="btn btn-warning" data-toggle="modal" data-target="#myModal2">Create Tour</button>
	  		</div>
            @endif
       <div style="height:50px;" ></div>
	  		
	   <div class="tab-content">

		    <div id="profile" class="tab-pane fade in active">
		     <h1 class="text-center">{{$id->name}}</h1>
		     <h4><div class="col-sm-4"></div><div class="col-sm-2"><strong>Gender: </strong></div> <div class="col-sm-6">{{$id->gender}}</div></h4>
		     <br>
		     <h4><div class="col-sm-4"></div><div class="col-sm-2"><strong>Birthday: </strong></div> <div class="col-sm-6">{{$id->birthday}}</div></h4>
		     <br>
		     <h4><div class="col-sm-4"></div><div class="col-sm-2"><strong>Email: </strong></div> <div class="col-sm-6">{{$id->email}}</div></h4>
		     <br>
		     <h4><div class="col-sm-4"></div><div class="col-sm-2"><strong>Address: </strong></div> <div class="col-sm-6">{{$id->address}}</div></h4>
		     <div style="height:50px;" ></div>
		     {{-- <div class="col-sm-5"></div><div class="col-sm-2">
		     	<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                  Edit Profile
                </button>	
		     </div><div class="col-sm-5"></div> --}}
		     <div style="height:50px;" ></div>
		    </div>

		    <div id="myplan" class="tab-pane fade">
		      


















<div style="height:20px;" ></div>
<div class="wrapper">
    <div class="fresh-table toolbar-color-red">
    <!--    Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange                  
            Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
    -->
        
        {{-- <div class="toolbar">
            <button id="alertBtn" class="btn btn-default">Alert</button>
        </div> --}}
        
        <table id="fresh-table" class="table">
            <thead>
                <th data-field="id">ID</th>
            	<th data-field="name" data-sortable="true">Name</th>
            	<th data-field="salary" data-sortable="true">Salary</th>
            	<th data-field="country" data-sortable="true">Country</th>
            	<th data-field="city">City</th>
            	<th data-field="actions" data-formatter="operateFormatter" data-events="operateEvents">Actions</th>
            </thead>
            <tbody>
                <tr>
                	<td>1</td>
                	<td>Dakota Rice</td>
                	<td>$36,738</td>
                	<td>Niger</td>
                	<td>Oud-Turnhout</td>
                	<td></td>
                </tr>
                <tr>
                	<td>2</td>
                	<td>Minerva Hooper</td>
                	<td>$23,789</td>
                	<td>Curaçao</td>
                	<td>Sinaai-Waas</td>
                	<td></td>
                </tr>
                <tr>
                	<td>3</td>
                	<td>Sage Rodriguez</td>
                	<td>$56,142</td>
                	<td>Netherlands</td>
                	<td>Baileux</td>
                	<td></td>
                </tr>
                <tr>
                	<td>4</td>
                	<td>Philip Chaney</td>
                	<td>$38,735</td>
                	<td>Korea, South</td>
                	<td>Overland Park</td>
                	<td></td>
                </tr>
                <tr>
                	<td>5</td>
                	<td>Doris Greene</td>
                	<td>$63,542</td>
                	<td>Malawi</td>
                	<td>Feldkirchen in Kärnten</td>
                	<td></td>
                </tr>
                <tr>
                	<td>6</td>
                	<td>Mason Porter</td>
                	<td>$78,615</td>
                	<td>Chile</td>
                	<td>Gloucester</td>
                	<td></td>
                </tr>
                <tr>
                	<td>7</td>
                	<td>Alden Chen</td>
                	<td>$63,929</td>
                	<td>Finland</td>
                	<td>Gary</td>
                	<td></td>
                </tr>
                <tr>
                	<td>8</td>
                	<td>Colton Hodges</td>
                	<td>$93,961</td>
                	<td>Nicaragua</td>
                	<td>Delft</td>
                	<td></td>
                </tr>
                <tr>
                	<td>9</td>
                	<td>Illana Nelson</td>
                	<td>$56,142</td>
                	<td>Heard Island</td>
                	<td>Montone</td>
                	<td></td>
                </tr>
                <tr>
                	<td>10</td>
                	<td>Nicole Lane</td>
                	<td>$93,148</td>
                	<td>Cayman Islands</td>
                	<td>Cottbus</td>
                	<td></td>
                </tr>
                <tr>
                	<td>11</td>
                	<td>Chaim Saunders</td>
                	<td>$5,502</td>
                	<td>Romania</td>
                	<td>New Quay</td>
                	<td></td>
                </tr>
                <tr>
                	<td>12</td>
                	<td>Josiah Simon</td>
                	<td>$50,265</td>
                	<td>Christmas Island</td>
                	<td>Sint-Jans-Molenbeek</td>
                	<td></td>
                </tr>
                <tr>
                	<td>13</td>
                	<td>Ila Poole</td>
                	<td>$67,413</td>
                	<td>Montenegro</td>
                	<td>Pontevedra</td>
                	<td></td>
                </tr>
                <tr>
                	<td>14</td>
                	<td>Shana Mejia</td>
                	<td>$58,566</td>
                	<td>Afghanistan</td>
                	<td>Ballarat</td>
                	<td></td>
                </tr>
                <tr>
                	<td>15</td>
                	<td>Lana Ryan</td>
                	<td>$64,151</td>
                	<td>Martinique</td>
                	<td>Portobuffolè</td>
                	<td></td>
                </tr>
                <tr>
                	<td>16</td>
                	<td>Daquan Bender</td>
                	<td>$91,906</td>
                	<td>Sao Tome and Principe</td>
                	<td>Walhain-Saint-Paul</td>
                	<td></td>
                </tr>
                <tr>
                	<td>17</td>
                	<td>Connor Wagner</td>
                	<td>$86,537</td>
                	<td>Germany</td>
                	<td>Solihull</td>
                	<td></td>
                </tr>
                <tr>
                	<td>18</td>
                	<td>Boris Horton</td>
                	<td>$35,094</td>
                	<td>Laos</td>
                	<td>Saint-Mard</td>
                	<td></td>
                </tr>
                <tr>
                	<td>19</td>
                	<td>Winifred Ryan</td>
                	<td>$64,436</td>
                	<td>Ireland</td>
                	<td>Ronciglione</td>
                	<td></td>
                </tr>
                <tr>
                	<td>20</td>
                	<td>Tanisha Hayes</td>
                	<td>$43,670</td>
                	<td>Argentina</td>
                	<td>Lint</td>
                	<td></td>
                </tr>
                <tr>
                	<td>21</td>
                	<td>Knox Morris</td>
                	<td>$58,474</td>
                	<td>Norway</td>
                	<td>Melle</td>
                	<td></td>
                </tr>
                <tr>
                	<td>22</td>
                	<td>Idola Stephenson</td>
                	<td>$25,236</td>
                	<td>Saint Barthélemy</td>
                	<td>Joncret</td>
                	<td></td>
                </tr>
                <tr>
                	<td>23</td>
                	<td>Abra Keller</td>
                	<td>$28,272</td>
                	<td>Switzerland</td>
                	<td>Thame</td>
                	<td></td>
                </tr>
                <tr>
                	<td>24</td>
                	<td>Teagan Mcgowan</td>
                	<td>$51,059</td>
                	<td>Sudan</td>
                	<td>Stalowa Wola</td>
                	<td></td>
                </tr>
                <tr>
                	<td>25</td>
                	<td>Leandra Kirby</td>
                	<td>$89,270</td>
                	<td>Western Sahara</td>
                	<td>Oristano</td>
                	<td></td>
                </tr>
                <tr>
                	<td>26</td>
                	<td>Quentin Swanson</td>
                	<td>$64,782</td>
                	<td>Saint Vincent</td>
                	<td>Poznań</td>
                	<td></td>
                </tr>
                <tr>
                	<td>27</td>
                	<td>Naida Oneil</td>
                	<td>$52,070</td>
                	<td>Panama</td>
                	<td>Floriffoux</td>
                	<td></td>
                </tr>
                <tr>
                	<td>28</td>
                	<td>Martina Kent</td>
                	<td>$70,020</td>
                	<td>Paraguay</td>
                	<td>Leffinge</td>
                	<td></td>
                </tr>
                <tr>
                	<td>29</td>
                	<td>Bruno Wilson</td>
                	<td>$71,875</td>
                	<td>Tanzania</td>
                	<td>Oosterhout</td>
                	<td></td>
                </tr>
                <tr>
                	<td>30</td>
                	<td>Len Talley</td>
                	<td>$62,755</td>
                	<td>Barbados</td>
                	<td>Fauglia</td>
                	<td></td>
                </tr>
                <tr>
                	<td>31</td>
                	<td>Cherokee Mcclure</td>
                	<td>$39,037</td>
                	<td>United States</td>
                	<td>Pike Creek</td>
                	<td></td>
                </tr>
                <tr>
                	<td>32</td>
                	<td>Nero Harrison</td>
                	<td>$25,378</td>
                	<td>Tanzania</td>
                	<td>Portland</td>
                	<td></td>
                </tr>
                <tr>
                	<td>33</td>
                	<td>Mikayla Peters</td>
                	<td>$79,896</td>
                	<td>Heard Island</td>
                	<td>San Jose</td>
                	<td></td>
                </tr>
                <tr>
                	<td>34</td>
                	<td>Judith Mercer</td>
                	<td>$87,954</td>
                	<td>Cuba</td>
                	<td>North Vancouver</td>
                	<td></td>
                </tr>
                <tr>
                	<td>35</td>
                	<td>Rama Christensen</td>
                	<td>$74,139</td>
                	<td>Niger</td>
                	<td>Rimouski</td>
                	<td></td>
                </tr>
                <tr>
                	<td>36</td>
                	<td>Brian Carroll</td>
                	<td>$50,358</td>
                	<td>Cayman Islands</td>
                	<td>Hudson's Hope</td>
                	<td></td>
                </tr>
                <tr>
                	<td>37</td>
                	<td>Lunea Cooke</td>
                	<td>$54,123</td>
                	<td>Madagascar</td>
                	<td>Tsiigehtchic</td>
                	<td></td>
                </tr>
                <tr>
                	<td>38</td>
                	<td>Holly Bowman</td>
                	<td>$28,024</td>
                	<td>Brunei</td>
                	<td>Farrukhabad-cum-Fatehgarh</td>
                	<td></td>
                </tr>
                <tr>
                	<td>39</td>
                	<td>Evangeline Levine</td>
                	<td>$22,318</td>
                	<td>Iceland</td>
                	<td>Coassolo Torinese</td>
                	<td></td>
                </tr>
                <tr>
                	<td>40</td>
                	<td>Beck Barlow</td>
                	<td>$87,051</td>
                	<td>Hungary</td>
                	<td>Drancy</td>
                	<td></td>
                </tr>
                <tr>
                	<td>41</td>
                	<td>Sacha Dale</td>
                	<td>$52,392</td>
                	<td>Congo (Brazzaville)</td>
                	<td>Sint-Pauwels</td>
                	<td></td>
                </tr>
                <tr>
                	<td>42</td>
                	<td>Candice Norman</td>
                	<td>$69,753</td>
                	<td>Madagascar</td>
                	<td>Verrès</td>
                	<td></td>
                </tr>
                <tr>
                	<td>43</td>
                	<td>Herrod Snider</td>
                	<td>$53,181</td>
                	<td>Nigeria</td>
                	<td>Tejar</td>
                	<td></td>
                </tr>
                <tr>
                	<td>44</td>
                	<td>Kylie Weeks</td>
                	<td>$33,401</td>
                	<td>Monaco</td>
                	<td>Piancastagnaio</td>
                	<td></td>
                </tr>
                <tr>
                	<td>45</td>
                	<td>Cadman Mendez</td>
                	<td>$96,468</td>
                	<td>South Georgia</td>
                	<td>Deline</td>
                	<td></td>
                </tr>
                <tr>
                	<td>46</td>
                	<td>Teegan Robbins</td>
                	<td>$14,632</td>
                	<td>Turkmenistan</td>
                	<td>Cerchio</td>
                	<td></td>
                </tr>
                <tr>
                	<td>47</td>
                	<td>Lael Padilla</td>
                	<td>$51,409</td>
                	<td>Ghana</td>
                	<td>Biała Podlaska</td>
                	<td></td>
                </tr>
                <tr>
                	<td>48</td>
                	<td>Imogene May</td>
                	<td>$23,589</td>
                	<td>Turkmenistan</td>
                	<td>Gressan</td>
                	<td></td>
                </tr>
                <tr>
                	<td>49</td>
                	<td>Bernard Yang</td>
                	<td>$14,082</td>
                	<td>Timor-Leste</td>
                	<td>Saint-Eugene</td>
                	<td></td>
                </tr>
                <tr>
                	<td>50</td>
                	<td>Amber Gillespie</td>
                	<td>$23,133</td>
                	<td>Sao Tome and Principe</td>
                	<td>Bucharest</td>
                	<td></td>
                </tr>
                <tr>
                	<td>51</td>
                	<td>Grady Melton</td>
                	<td>$73,501</td>
                	<td>Tokelau</td>
                	<td>Colobraro</td>
                	<td></td>
                </tr>
                <tr>
                	<td>52</td>
                	<td>Rae Williams</td>
                	<td>$80,797</td>
                	<td>Sierra Leone</td>
                	<td>Merrickville-Wolford</td>
                	<td></td>
                </tr>
                <tr>
                	<td>53</td>
                	<td>Quon Tyson</td>
                	<td>$88,498</td>
                	<td>Finland</td>
                	<td>Machilipatnam</td>
                	<td></td>
                </tr>
                <tr>
                	<td>54</td>
                	<td>Xyla Sheppard</td>
                	<td>$39,462</td>
                	<td>Russian Federation</td>
                	<td>Tourinnes-Saint-Lambert</td>
                	<td></td>
                </tr>
                <tr>
                	<td>55</td>
                	<td>Lamar Branch</td>
                	<td>$71,272</td>
                	<td>Malta</td>
                	<td>Kuşadası</td>
                	<td></td>
                </tr>
                <tr>
                	<td>56</td>
                	<td>Iris Jordan</td>
                	<td>$49,642</td>
                	<td>Gambia</td>
                	<td>Finkenstein am Faaker See</td>
                	<td></td>
                </tr>
                <tr>
                	<td>57</td>
                	<td>Zeus Hicks</td>
                	<td>$10,915</td>
                	<td>Poland</td>
                	<td>Conselice</td>
                	<td></td>
                </tr>
                <tr>
                	<td>58</td>
                	<td>Rafael Luna</td>
                	<td>$41,457</td>
                	<td>Bonaire</td>
                	<td>Dibrugarh</td>
                	<td></td>
                </tr>
                <tr>
                	<td>59</td>
                	<td>Reed Rodgers</td>
                	<td>$49,797</td>
                	<td>Bahamas</td>
                	<td>Olsztyn</td>
                	<td></td>
                </tr>
                <tr>
                	<td>60</td>
                	<td>Kenneth Tyler</td>
                	<td>$33,618</td>
                	<td>Venezuela</td>
                	<td>Seilles</td>
                	<td></td>
                </tr>
                <tr>
                	<td>61</td>
                	<td>Cameron Wooten</td>
                	<td>$58,119</td>
                	<td>Saudi Arabia</td>
                	<td>Montebello sul Sangro</td>
                	<td></td>
                </tr>
                <tr>
                	<td>62</td>
                	<td>Quentin Talley</td>
                	<td>$38,465</td>
                	<td>Belize</td>
                	<td>Serralunga d'Alba</td>
                	<td></td>
                </tr>
                <tr>
                	<td>63</td>
                	<td>Petra Day</td>
                	<td>$98,804</td>
                	<td>Belarus</td>
                	<td>Bielefeld</td>
                	<td></td>
                </tr>
                <tr>
                	<td>64</td>
                	<td>Slade Brady</td>
                	<td>$10,311</td>
                	<td>Greece</td>
                	<td>Cardigan</td>
                	<td></td>
                </tr>
                <tr>
                	<td>65</td>
                	<td>Zena Parker</td>
                	<td>$65,753</td>
                	<td>Slovakia</td>
                	<td>Tirupati</td>
                	<td></td>
                </tr>
                <tr>
                	<td>66</td>
                	<td>Jordan Johns</td>
                	<td>$25,588</td>
                	<td>Sudan</td>
                	<td>Beauvechain</td>
                	<td></td>
                </tr>
                <tr>
                	<td>67</td>
                	<td>Xaviera Schmidt</td>
                	<td>$7,553</td>
                	<td>Lesotho</td>
                	<td>M�nchengladbach</td>
                	<td></td>
                </tr>
                <tr>
                	<td>68</td>
                	<td>Ferris Williams</td>
                	<td>$38,556</td>
                	<td>Kuwait</td>
                	<td>Agartala</td>
                	<td></td>
                </tr>
                <tr>
                	<td>69</td>
                	<td>Riley Smith</td>
                	<td>$92,133</td>
                	<td>Portugal</td>
                	<td>Maringá</td>
                	<td></td>
                </tr>
                <tr>
                	<td>70</td>
                	<td>Gary Gentry</td>
                	<td>$21,792</td>
                	<td>Portugal</td>
                	<td>Sint-Denijs-Westrem</td>
                	<td></td>
                </tr>
                <tr>
                	<td>71</td>
                	<td>Octavia Clemons</td>
                	<td>$57,445</td>
                	<td>Sao Tome and Principe</td>
                	<td>Bekkerzeel</td>
                	<td></td>
                </tr>
                <tr>
                	<td>72</td>
                	<td>Kareem Sharpe</td>
                	<td>$46,751</td>
                	<td>Qatar</td>
                	<td>Bromyard</td>
                	<td></td>
                </tr>
                <tr>
                	<td>73</td>
                	<td>Macon Mcgee</td>
                	<td>$74,661</td>
                	<td>Somalia</td>
                	<td>Savona</td>
                	<td></td>
                </tr>
                <tr>
                	<td>74</td>
                	<td>Austin Gamble</td>
                	<td>$90,527</td>
                	<td>Lithuania</td>
                	<td>Red Deer</td>
                	<td></td>
                </tr>
                <tr>
                	<td>75</td>
                	<td>Astra Odom</td>
                	<td>$89,223</td>
                	<td>Micronesia</td>
                	<td>Fort Providence</td>
                	<td></td>
                </tr>
                <tr>
                	<td>76</td>
                	<td>Ima Gamble</td>
                	<td>$73,044</td>
                	<td>Singapore</td>
                	<td>Koszalin</td>
                	<td></td>
                </tr>
                <tr>
                	<td>77</td>
                	<td>Tanya Herring</td>
                	<td>$96,594</td>
                	<td>Tonga</td>
                	<td>Tillet</td>
                	<td></td>
                </tr>
                <tr>
                	<td>78</td>
                	<td>Tucker Brown</td>
                	<td>$68,624</td>
                	<td>Seychelles</td>
                	<td>Hull</td>
                	<td></td>
                </tr>
                <tr>
                	<td>79</td>
                	<td>Zelda Hines</td>
                	<td>$40,699</td>
                	<td>Cameroon</td>
                	<td>Rochester</td>
                	<td></td>
                </tr>
                <tr>
                	<td>80</td>
                	<td>Elton Holden</td>
                	<td>$22,698</td>
                	<td>Samoa</td>
                	<td>Acquedolci</td>
                	<td></td>
                </tr>
                <tr>
                	<td>81</td>
                	<td>Virginia Valencia</td>
                	<td>$72,698</td>
                	<td>Algeria</td>
                	<td>Pointe-aux-Trembles</td>
                	<td></td>
                </tr>
                <tr>
                	<td>82</td>
                	<td>Mia Pratt</td>
                	<td>$47,252</td>
                	<td>Bhutan</td>
                	<td>Salt Lake City</td>
                	<td></td>
                </tr>
                <tr>
                	<td>83</td>
                	<td>Kitra Craig</td>
                	<td>$36,888</td>
                	<td>Yemen</td>
                	<td>Melville</td>
                	<td></td>
                </tr>
                <tr>
                	<td>84</td>
                	<td>Amery Spears</td>
                	<td>$62,359</td>
                	<td>Montenegro</td>
                	<td>Logroño</td>
                	<td></td>
                </tr>
                <tr>
                	<td>85</td>
                	<td>Kirk Miller</td>
                	<td>$45,812</td>
                	<td>Belize</td>
                	<td>Conca Casale</td>
                	<td></td>
                </tr>
                <tr>
                	<td>86</td>
                	<td>Elton Clayton</td>
                	<td>$23,513</td>
                	<td>Paraguay</td>
                	<td>Linton</td>
                	<td></td>
                </tr>
                <tr>
                	<td>87</td>
                	<td>Rhonda Chavez</td>
                	<td>$40,242</td>
                	<td>Korea, North</td>
                	<td>Mellery</td>
                	<td></td>
                </tr>
                <tr>
                	<td>88</td>
                	<td>Florence Tillman</td>
                	<td>$79,225</td>
                	<td>Cayman Islands</td>
                	<td>S�lange</td>
                	<td></td>
                </tr>
                <tr>
                	<td>89</td>
                	<td>Hayley Valencia</td>
                	<td>$26,047</td>
                	<td>Vanuatu</td>
                	<td>Crowsnest Pass</td>
                	<td></td>
                </tr>
                <tr>
                	<td>90</td>
                	<td>Wing Love</td>
                	<td>$72,505</td>
                	<td>Wallis and Futuna</td>
                	<td>Diadema</td>
                	<td></td>
                </tr>
                <tr>
                	<td>91</td>
                	<td>Gary Cochran</td>
                	<td>$50,642</td>
                	<td>Saint Lucia</td>
                	<td>Wilmington</td>
                	<td></td>
                </tr>
                <tr>
                	<td>92</td>
                	<td>Karleigh Cochran</td>
                	<td>$42,292</td>
                	<td>Korea, South</td>
                	<td>Newton Stewart</td>
                	<td></td>
                </tr>
                <tr>
                	<td>93</td>
                	<td>Jin Levy</td>
                	<td>$73,247</td>
                	<td>Honduras</td>
                	<td>Sudbury</td>
                	<td></td>
                </tr>
                <tr>
                	<td>94</td>
                	<td>Mari Webb</td>
                	<td>$26,412</td>
                	<td>Finland</td>
                	<td>Tarvisio</td>
                	<td></td>
                </tr>
                <tr>
                	<td>95</td>
                	<td>Jenette Roman</td>
                	<td>$15,920</td>
                	<td>France</td>
                	<td>Forbach</td>
                	<td></td>
                </tr>
                <tr>
                	<td>96</td>
                	<td>Fritz Silva</td>
                	<td>$18,512</td>
                	<td>Macedonia</td>
                	<td>Lauco</td>
                	<td></td>
                </tr>
                <tr>
                	<td>97</td>
                	<td>Rigel Mathews</td>
                	<td>$75,899</td>
                	<td>Congo</td>
                	<td>Madrid</td>
                	<td></td>
                </tr>
                <tr>
                	<td>98</td>
                	<td>Stephen Pace</td>
                	<td>$60,739</td>
                	<td>Hungary</td>
                	<td>Cinco Esquinas</td>
                	<td></td>
                </tr>
                <tr>
                	<td>99</td>
                	<td>Desiree Humphrey</td>
                	<td>$51,795</td>
                	<td>Portugal</td>
                	<td>Forst</td>
                	<td></td>
                </tr>
                <tr>
                	<td>100</td>
                	<td>Vielka Norton</td>
                	<td>$44,584</td>
                	<td>Spain</td>
                	<td>Thane</td>
                	<td></td>
                </tr>
            </tbody>
        </table>
    </div>
    
</div>





















		    </div>

		    <div id="myfollow" class="tab-pane fade">
		      <h1 class="text-center">{{$id->name}}</h1>
		                <p><strong>Gender: </strong> {{$id->gender}}</p>
		                                <p><strong>Email: </strong> {{$id->email}}</p>
		                        <p><strong>Address: </strong> {{$id->address}}</p>
		    </div>

		    <div id="myjoin" class="tab-pane fade">
		      <h1 class="text-center">{{$id->name}}</h1>
		                <p><strong>Gender: </strong> {{$id->gender}}</p>
		                                <p><strong>Email: </strong> {{$id->email}}</p>
		                        <p><strong>Address: </strong> {{$id->address}}</p>
		    </div>
	  </div>
                        
			</div>
    </div>
</div>

                

                <!-- Modal Create Tour-->
                <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel2" >Create Tour</h4>
                      </div>
                      <div class="modal-body">
                      	 
                        <form action="{{url("tour_create")}}" method="POST" role="form" enctype="multipart/form-data">
                   		{{csrf_field()}}

                       <div class="form-group">
                           <label for="" class="col-md-4 control-label">Tour Name</label>
                           <div class="col-md-8">
                                <input type="text" class="form-control" id="" placeholder="" value="" name="tour_name">
                           </div>
                       </div>
                       
                       <div class="form-group">
                           <label for="" class="col-md-4 control-label">Start Time</label>
                           <div class="col-md-8">
                                <input type="datetime-local" class="form-control" id="" placeholder="" value="" name="start_time">
                           </div>
                       </div>
                       
                       <div class="form-group">
                           <label for="" class="col-md-4 control-label">Start Place</label>
                           <div class="col-md-8">
                                <input type="text" class="form-control" id="" placeholder="" value="" name="start_place">
                           </div>
                       </div>

                       <div class="form-group">
                           <label for="" class="col-md-4 control-label">Max Join User</label>
                           <div class="col-md-8">
                                <input type="text" class="form-control" id="" placeholder="" value="" name="user_max">
                           </div>
                       </div>
                       <label></label>
                       <div class="form-group">
                           <label for="" class="col-md-4 control-label">
                           Cover Photo
                           <label class="btn btn-default btn-file">
                                    Browse... <input name="cover_photo" type="file" style="display: none;"class="file-loading" value="" placeholder="" onchange="readURL3(this);">
                                </label>
                           </label>
                           <div class="col-md-8" style="text-align:center">
                                <script type="text/javascript">
                                    function readURL3(input) {
                                        if (input.files && input.files[0]) {
                                            var reader = new FileReader();

                                            reader.onload = function (e) {
                                                $('#tour_cover_photo').attr('src', e.target.result);
                                            }

                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    }
                                </script>
                                <img id="tour_cover_photo" src="../images/transparent.png" alt="" class="img-thumbnail" height="200" width="auto"/> 
                           </div>
                       </div>
                      <label></label>
                       <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" method="post">
                                     Create Tour
                                </button>
                            </div>
                        </div> 
                   </form>
                      </div>
                      <div class="modal-footer">
                       
                      </div>
                    </div>
                  </div>
                </div>
                <!-- -->

                <!-- Modal Edit Profile-->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel" >Edit Profile</h4>
                      </div>
                      <div class="modal-body">
                         
                        <form action="{{url("user")}}/{{$id->id}}" method="POST" role="form" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="form-group">
                           <label for="" class="col-md-4 control-label">
                           Avatar Photo
                           <label class="btn btn-default btn-file">
                                    Browse... <input name="avatar_photo" type="file" style="display: none;" class="file-loading" value="{{$id->avatar_photo}}" placeholder="{{$id->avatar_photo}}" onchange="readURL(this);">
                                </label>
                           </label>
                           <div class="col-md-8" style="text-align:center">
                                <script type="text/javascript">
                                    function readURL(input) {
                                        if (input.files && input.files[0]) {
                                            var reader = new FileReader();

                                            reader.onload = function (e) {
                                                $('#avatar_photo').attr('src', e.target.result);
                                            }

                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    }
                                </script>
                                <img id="avatar_photo" src="{{ url('/uploads/users/avatar_photo')}}/{{$id->avatar_photo}}" alt="Avatar" class="img-thumbnail" height="70" width="70"/>
                           </div>
                       </div> 
                       <label></label>
                       <div class="form-group">
                           <label for="" class="col-md-4 control-label">
                           Cover Photo
                           <label class="btn btn-default btn-file">
                                    Browse... <input name="cover_photo" type="file" style="display: none;"class="file-loading" value="{{$id->cover_photo}}" placeholder="{{$id->cover_photo}}" onchange="readURL2(this);">
                                </label>
                           </label>
                           <div class="col-md-8" style="text-align:center">
                                <script type="text/javascript">
                                    function readURL2(input) {
                                        if (input.files && input.files[0]) {
                                            var reader = new FileReader();

                                            reader.onload = function (e) {
                                                $('#cover_photo').attr('src', e.target.result);
                                            }

                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    }
                                </script>
                                <img id="cover_photo" src="{{ url('/uploads/users/cover_photo')}}/{{$id->cover_photo}}" alt="Cover" class="img-thumbnail" height="200" width="200"/> 
                           </div>
                       </div> 
                       <label></label>
                       <div class="form-group">
                           <label for="" class="col-md-4 control-label">Name</label>
                           <div class="col-md-8">
                                <input type="text" class="form-control" id="" placeholder="{{$id->name}}" value="{{$id->name}}" name="name">
                           </div>
                       </div>
                       
                       <div class="form-group">
                           <label for="" class="col-md-4 control-label">Address</label>
                           <div class="col-md-8">
                                <input type="text" class="form-control" id="" placeholder="{{$id->address}}" value="{{$id->address}}" name="address">
                           </div>
                       </div>
                       
                       <div class="form-group">
                           <label for="" class="col-md-4 control-label">Birthday</label>
                           <div class="col-md-8">
                                <input type="datetime-local" class="form-control" id="" placeholder="{{$id->birthday}}" value="{{$id->birthday}}" name="birthday">
                           </div>
                       </div>
                       
                       <div class="form-group">
                          <label for="" class="col-md-4 control-label">Gender</label>
                            <div class="col-md-8">
                              <select class="form-control" id="" name = "gender" placeholder="{{$id->gender}}" value="{{$id->gender}}">
                                <option name="male">male</option>
                                <option name="female">female</option>
                              </select>
                            </div>
                      </div>
                      <label></label>
                       <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" method="post">
                                     Update Profile
                                </button>
                            </div>
                        </div> 
                   </form>
                      </div>
                      <div class="modal-footer">
                       
                      </div>
                    </div>
                  </div>
                </div>
                <!-- -->
@endsection



