<?php
/*
Plugin Name: Register Helper Example
Plugin URI: http://www.paidmembershipspro.com/wp/pmpro-customizations/
Description: Register Helper Initialization Example
Version: .1
Author: Stranger Studios
Author URI: http://www.strangerstudios.com
*/
//we have to put everything in a function called on init, so we are sure Register Helper is loaded

function my_pmprorh_init()
{
    //don't break if Register Helper is not loaded
    if(!function_exists("pmprorh_add_registration_field"))
    {
        return false;
    }
    //define the fields
    $fields = array();
    
    $fields[] = new PMProRH_Field(
        "name_first",              // input name, will also be used as meta key
        "text",                 // type of field
        array(
            "size"=>40,         // input size
                          "required"=>true,    // make this field required
            "class"=>"first name col-md-7 col-md-pull-1 input-md pull-right form-control", // custom class
	    "label"=>"First Name(s)",	// custom field label
            "memberslistcsv"=>true, // Show this field on the CSV export
            "profile"=>true,
        ));
        
   $fields[] = new PMProRH_Field(
        "name_last",              // input name, will also be used as meta key
        "text",                 // type of field
        array(
            "size"=>40,         // input size
            "class"=>"last name col-md-7 col-md-pull-1 input-md pull-right form-control", // custom class
	    "label"=>"Surname", // custom field label
		"showrequired"=>true,
		              "required"=>true,    // make this field required
		  "memberslistcsv"=>true, // Show this field on the CSV export
		  "profile"=>true,
        ));
              $fields[] = new PMProRH_Field(
        "email",                     // input name, will also be used as meta key
        "text",                         // type of field
        array(
        "required"=>true,    // make this field required
		"showrequired"=>true,
            "label"=>"Email",   // custom field label
            "memberslistcsv"=>true, // Show this field on the CSV export
            "profile"=>true,
            "class"=>"col-md-7 col-md-pull-1 input-md pull-right form-control", // custom class
        ));
         $fields[] = new PMProRH_Field(
        "mob_phone",                     // input name, will also be used as meta key
        "text",                         // type of field
        array(
            "label"=>"Mobile Telephone",   // custom field label
		"showrequired"=>true,
              "memberslistcsv"=>true, // Show this field on the CSV export
              "profile"=>true,
               "If non-UK, include international dialing code",
              "class"=>"col-md-7 col-md-pull-1 input-md pull-right form-control", // custom class
        ));
    $fields[] = new PMProRH_Field(
        "address_street_address",                     // input name, will also be used as meta key
        "text",                         // type of field
        array(
        "class"=>"last name col-md-7 col-md-pull-1 input-md pull-right form-control", // custom class
            "label"=>"Address Line 1",   // custom field label
              "memberslistcsv"=>true, // Show this field on the CSV export
               "hint"=>"House name/number and street",
               "profile"=>"only",
        ));
   $fields[] = new PMProRH_Field(
        "address_line_2",                     // input name, will also be used as meta key
        "text",                         // type of field
        array(
           "label"=>"Address Line 2",   // custom field label
           "class"=>"col-md-7 col-md-pull-1 input-md pull-right form-control", 
              "memberslistcsv"=>true, // Show this field on the CSV export
              "hint"=>"Apartment, suite, unit, building, floor etc.",
             "profile"=>"only",
        ));
        
          $fields[] = new PMProRH_Field(
        "state_province_region",              // input name, will also be used as meta key
           "text",                         // type of field
        array(
            "size"=>40,         // input size
            "profile"=>true,
            "class"=>"col-md-7 col-md-pull-1 input-md pull-right form-control", // custom class
	    "label"=>"Region",	// custom field label
            "memberslistcsv"=>true, // Show this field on the CSV export,
           "profile"=>"only",
            
        ));
        
 $fields[] = new PMProRH_Field(
        "city",                     // input name, will also be used as meta key
        "text",                         // type of field
        array(
            "label"=>"City",   // custom field label
              "memberslistcsv"=>true, // Show this field on the CSV export
       "class"=>"col-md-7 col-md-pull-1 input-md pull-right form-control", // custom class
              "profile"=>"only",
        ));

       
 $fields[] = new PMProRH_Field(
        "zip_postal_code",                     // input name, will also be used as meta key
        "text",                         // type of field
        array(
            "label"=>"Post / Zip Code",   // custom field label
           "profile"=>"only",
              "memberslistcsv"=>true, // Show this field on the CSV export
               "class"=>"col-md-7 col-md-pull-1 input-md pull-right form-control", // custom class
        ));
    
           $fields[] = new PMProRH_Field(
        "fire_service",                     // input name, will also be used as meta key
        "text",                         // type of field
        array(
        "required"=>true,    // make this field required
		"showrequired"=>true,
            "label"=>"Fire Service Name",   // custom field label
            "memberslistcsv"=>true, // Show this field on the CSV export
            "profile"=>true,
            "class"=>"col-md-7 col-md-pull-1 input-md pull-right form-control", // custom class
        ));

                 $fields[] = new PMProRH_Field(
        "country",              // input name, will also be used as meta key
         "select",                      // type of field
        array(
            "size"=>40,         // input size
            "profile"=>true,
            "class"=>"col-md-7 col-md-pull-1 input-md pull-right form-control", // custom class
	    "label"=>"Country",	// custom field label
            "memberslistcsv"=>true, // Show this field on the CSV export,
            "options"=>array(       // <option> elements for select field
                "" => "",       // blank option - cannot be selected if this field is required

"United Kingdom"=>"United Kingdom",
"United States"=>"United States",
"Canada"=>"Canada",
"Australia"=>"Australia",
"Netherlands"=>"Netherlands",
"France"=>"France",
"Germany"=>"Germany",
""=>"",
"Afghanistan"=>"Afghanistan",
"Albania"=>"Albania",
"Algeria"=>"Algeria",
"Andorra"=>"Andorra",
"Antigua and Barbuda"=>"Antigua and Barbuda",
"Argentina"=>"Argentina",
"Armenia"=>"Armenia",
"Austria"=>"Austria",
"Azerbaijan"=>"Azerbaijan",
"Bahamas"=>"Bahamas",
"Bahrain"=>"Bahrain",
"Bangladesh"=>"Bangladesh",
"Barbados"=>"Barbados",
"Belarus"=>"Belarus",
"Belgium"=>"Belgium",
"Belize"=>"Belize",
"Benin"=>"Benin",
"Bhutan"=>"Bhutan",
"Bolivia"=>"Bolivia",
"Bosnia and Herzegovina"=>"Bosnia and Herzegovina",
"Botswana"=>"Botswana",
"Brazil"=>"Brazil",
"Brunei"=>"Brunei",
"Bulgaria"=>"Bulgaria",
"Burkina Faso"=>"Burkina Faso",
"Burundi"=>"Burundi",
"Cambodia"=>"Cambodia",
"Cameroon"=>"Cameroon",
"Cape Verde"=>"Cape Verde",
"Central African Republic"=>"Central African Republic",
"Chad"=>"Chad",
"Chile"=>"Chile",
"China"=>"China",
"Colombia"=>"Colombia",
"Comoros"=>"Comoros",
"Congo"=>"Congo",
"Costa Rica"=>"Costa Rica",
"Côte d'Ivoire"=>"Côte d'Ivoire",
"Croatia"=>"Croatia",
"Cuba"=>"Cuba",
"Cyprus"=>"Cyprus",
"Czech Republic"=>"Czech Republic",
"Denmark"=>"Denmark",
"Djibouti"=>"Djibouti",
"Dominica"=>"Dominica",
"Dominican Republic"=>"Dominican Republic",
"East Timor"=>"East Timor",
"Ecuador"=>"Ecuador",
"Egypt"=>"Egypt",
"El Salvador"=>"El Salvador",
"Equatorial Guinea"=>"Equatorial Guinea",
"Eritrea"=>"Eritrea",
"Estonia"=>"Estonia",
"Ethiopia"=>"Ethiopia",
"Fiji"=>"Fiji",
"Finland"=>"Finland",
"Gabon"=>"Gabon",
"Gambia"=>"Gambia",
"Georgia"=>"Georgia",
"Ghana"=>"Ghana",
"Greece"=>"Greece",
"Grenada"=>"Grenada",
"Guatemala"=>"Guatemala",
"Guernsey"=>"Guernsey",
"Guinea"=>"Guinea",
"Guinea-Bissau"=>"Guinea-Bissau",
"Guyana"=>"Guyana",
"Haiti"=>"Haiti",
"Honduras"=>"Honduras",
"Hong Kong"=>"Hong Kong",
"Hungary"=>"Hungary",
"Iceland"=>"Iceland",
"India"=>"India",
"Indonesia"=>"Indonesia",
"Iran"=>"Iran",
"Iraq"=>"Iraq",
"Ireland"=>"Ireland",
"Israel"=>"Israel",
"Italy"=>"Italy",
"Jamaica"=>"Jamaica",
"Japan"=>"Japan",
"Jordan"=>"Jordan",
"Kazakhstan"=>"Kazakhstan",
"Kenya"=>"Kenya",
"Kiribati"=>"Kiribati",
"North Korea"=>"North Korea",
"South Korea"=>"South Korea",
"Kuwait"=>"Kuwait",
"Kyrgyzstan"=>"Kyrgyzstan",
"Laos"=>"Laos",
"Latvia"=>"Latvia",
"Lebanon"=>"Lebanon",
"Lesotho"=>"Lesotho",
"Liberia"=>"Liberia",
"Libya"=>"Libya",
"Liechtenstein"=>"Liechtenstein",
"Lithuania"=>"Lithuania",
"Luxembourg"=>"Luxembourg",
"Macedonia"=>"Macedonia",
"Madagascar"=>"Madagascar",
"Malawi"=>"Malawi",
"Malaysia"=>"Malaysia",
"Maldives"=>"Maldives",
"Mali"=>"Mali",
"Malta"=>"Malta",
"Marshall Islands"=>"Marshall Islands",
"Mauritania"=>"Mauritania",
"Mauritius"=>"Mauritius",
"Mexico"=>"Mexico",
"Micronesia"=>"Micronesia",
"Moldova"=>"Moldova",
"Monaco"=>"Monaco",
"Mongolia"=>"Mongolia",
"Montenegro"=>"Montenegro",
"Morocco"=>"Morocco",
"Mozambique"=>"Mozambique",
"Myanmar"=>"Myanmar",
"Namibia"=>"Namibia",
"Nauru"=>"Nauru",
"Nepal"=>"Nepal",
"New Zealand"=>"New Zealand",
"Nicaragua"=>"Nicaragua",
"Niger"=>"Niger",
"Nigeria"=>"Nigeria",
"Norway"=>"Norway",
"Oman"=>"Oman",
"Pakistan"=>"Pakistan",
"Palau"=>"Palau",
"Panama"=>"Panama",
"Papua New Guinea"=>"Papua New Guinea",
"Paraguay"=>"Paraguay",
"Peru"=>"Peru",
"Philippines"=>"Philippines",
"Poland"=>"Poland",
"Portugal"=>"Portugal",
"Puerto Rico"=>"Puerto Rico",
"Qatar"=>"Qatar",
"Romania"=>"Romania",
"Russia"=>"Russia",
"Rwanda"=>"Rwanda",
"Saint Kitts and Nevis"=>"Saint Kitts and Nevis",
"Saint Lucia"=>"Saint Lucia",
"Saint Vincent and the Grenadines"=>"Saint Vincent and the Grenadines",
"Samoa"=>"Samoa",
"San Marino"=>"San Marino",
"Sao Tome and Principe"=>"Sao Tome and Principe",
"Saudi Arabia"=>"Saudi Arabia",
"Senegal"=>"Senegal",
"Serbia and Montenegro"=>"Serbia and Montenegro",
"Seychelles"=>"Seychelles",
"Sierra Leone"=>"Sierra Leone",
"Singapore"=>"Singapore",
"Slovakia"=>"Slovakia",
"Slovenia"=>"Slovenia",
"Solomon Islands"=>"Solomon Islands",
"Somalia"=>"Somalia",
"South Africa"=>"South Africa",
"Spain"=>"Spain",
"Sri Lanka"=>"Sri Lanka",
"Sudan"=>"Sudan",
"Suriname"=>"Suriname",
"Swaziland"=>"Swaziland",
"Sweden"=>"Sweden",
"Switzerland"=>"Switzerland",
"Syria"=>"Syria",
"Taiwan"=>"Taiwan",
"Tajikistan"=>"Tajikistan",
"Tanzania"=>"Tanzania",
"Thailand"=>"Thailand",
"Togo"=>"Togo",
"Tonga"=>"Tonga",
"Trinidad and Tobago"=>"Trinidad and Tobago",
"Tunisia"=>"Tunisia",
"Turkey"=>"Turkey",
"Turkmenistan"=>"Turkmenistan",
"Tuvalu"=>"Tuvalu",
"Uganda"=>"Uganda",
"Ukraine"=>"Ukraine",
"United Arab Emirates"=>"United Arab Emirates",
"Uruguay"=>"Uruguay",
"Uzbekistan"=>"Uzbekistan",
"Vanuatu"=>"Vanuatu",
"Vatican City"=>"Vatican City",
"Venezuela"=>"Venezuela",
"Vietnam"=>"Vietnam",
"Yemen"=>"Yemen",
"Zambia"=>"Zambia",
"Zimbabwe"=>"Zimbabwe",
        )
            ));
             
 $fields[] = new PMProRH_Field(
        "phone",                     // input name, will also be used as meta key
        "text",                         // type of field
        array(
            "label"=>"Home Telephone",   // custom field label
              "memberslistcsv"=>true, // Show this field on the CSV export
              "profile"=>"only",
               "If non-UK, include international dialing code",
              "class"=>"col-md-7 col-md-pull-1 input-md pull-right form-control", // custom class
        ));
        
      
            
       
        
        
        
                         $fields[] = new PMProRH_Field(
        "country_of_service",              // input name, will also be used as meta key
         "select",                      // type of field
        array(
            "size"=>40,         // input size
            "profile"=>"only",
            "class"=>"col-md-7 col-md-pull-1 input-md pull-right form-control", // custom class
	    "label"=>"Country of Fire Service",	// custom field label
            "required"=>true,    // make this field required
            "memberslistcsv"=>true, // Show this field on the CSV export,
            "options"=>array(       // <option> elements for select field
                "" => "",       // blank option - cannot be selected if this field is required

"United Kingdom"=>"United Kingdom",
"United States"=>"United States",
"Canada"=>"Canada",
"Australia"=>"Australia",
"Netherlands"=>"Netherlands",
"France"=>"France",
"Germany"=>"Germany",
""=>"",
"Afghanistan"=>"Afghanistan",
"Albania"=>"Albania",
"Algeria"=>"Algeria",
"Andorra"=>"Andorra",
"Antigua and Barbuda"=>"Antigua and Barbuda",
"Argentina"=>"Argentina",
"Armenia"=>"Armenia",
"Austria"=>"Austria",
"Azerbaijan"=>"Azerbaijan",
"Bahamas"=>"Bahamas",
"Bahrain"=>"Bahrain",
"Bangladesh"=>"Bangladesh",
"Barbados"=>"Barbados",
"Belarus"=>"Belarus",
"Belgium"=>"Belgium",
"Belize"=>"Belize",
"Benin"=>"Benin",
"Bhutan"=>"Bhutan",
"Bolivia"=>"Bolivia",
"Bosnia and Herzegovina"=>"Bosnia and Herzegovina",
"Botswana"=>"Botswana",
"Brazil"=>"Brazil",
"Brunei"=>"Brunei",
"Bulgaria"=>"Bulgaria",
"Burkina Faso"=>"Burkina Faso",
"Burundi"=>"Burundi",
"Cambodia"=>"Cambodia",
"Cameroon"=>"Cameroon",
"Cape Verde"=>"Cape Verde",
"Central African Republic"=>"Central African Republic",
"Chad"=>"Chad",
"Chile"=>"Chile",
"China"=>"China",
"Colombia"=>"Colombia",
"Comoros"=>"Comoros",
"Congo"=>"Congo",
"Costa Rica"=>"Costa Rica",
"Côte d'Ivoire"=>"Côte d'Ivoire",
"Croatia"=>"Croatia",
"Cuba"=>"Cuba",
"Cyprus"=>"Cyprus",
"Czech Republic"=>"Czech Republic",
"Denmark"=>"Denmark",
"Djibouti"=>"Djibouti",
"Dominica"=>"Dominica",
"Dominican Republic"=>"Dominican Republic",
"East Timor"=>"East Timor",
"Ecuador"=>"Ecuador",
"Egypt"=>"Egypt",
"El Salvador"=>"El Salvador",
"Equatorial Guinea"=>"Equatorial Guinea",
"Eritrea"=>"Eritrea",
"Estonia"=>"Estonia",
"Ethiopia"=>"Ethiopia",
"Fiji"=>"Fiji",
"Finland"=>"Finland",
"Gabon"=>"Gabon",
"Gambia"=>"Gambia",
"Georgia"=>"Georgia",
"Ghana"=>"Ghana",
"Greece"=>"Greece",
"Grenada"=>"Grenada",
"Guatemala"=>"Guatemala",
"Guernsey"=>"Guernsey",
"Guinea"=>"Guinea",
"Guinea-Bissau"=>"Guinea-Bissau",
"Guyana"=>"Guyana",
"Haiti"=>"Haiti",
"Honduras"=>"Honduras",
"Hong Kong"=>"Hong Kong",
"Hungary"=>"Hungary",
"Iceland"=>"Iceland",
"India"=>"India",
"Indonesia"=>"Indonesia",
"Iran"=>"Iran",
"Iraq"=>"Iraq",
"Ireland"=>"Ireland",
"Israel"=>"Israel",
"Italy"=>"Italy",
"Jamaica"=>"Jamaica",
"Japan"=>"Japan",
"Jordan"=>"Jordan",
"Kazakhstan"=>"Kazakhstan",
"Kenya"=>"Kenya",
"Kiribati"=>"Kiribati",
"North Korea"=>"North Korea",
"South Korea"=>"South Korea",
"Kuwait"=>"Kuwait",
"Kyrgyzstan"=>"Kyrgyzstan",
"Laos"=>"Laos",
"Latvia"=>"Latvia",
"Lebanon"=>"Lebanon",
"Lesotho"=>"Lesotho",
"Liberia"=>"Liberia",
"Libya"=>"Libya",
"Liechtenstein"=>"Liechtenstein",
"Lithuania"=>"Lithuania",
"Luxembourg"=>"Luxembourg",
"Macedonia"=>"Macedonia",
"Madagascar"=>"Madagascar",
"Malawi"=>"Malawi",
"Malaysia"=>"Malaysia",
"Maldives"=>"Maldives",
"Mali"=>"Mali",
"Malta"=>"Malta",
"Marshall Islands"=>"Marshall Islands",
"Mauritania"=>"Mauritania",
"Mauritius"=>"Mauritius",
"Mexico"=>"Mexico",
"Micronesia"=>"Micronesia",
"Moldova"=>"Moldova",
"Monaco"=>"Monaco",
"Mongolia"=>"Mongolia",
"Montenegro"=>"Montenegro",
"Morocco"=>"Morocco",
"Mozambique"=>"Mozambique",
"Myanmar"=>"Myanmar",
"Namibia"=>"Namibia",
"Nauru"=>"Nauru",
"Nepal"=>"Nepal",
"New Zealand"=>"New Zealand",
"Nicaragua"=>"Nicaragua",
"Niger"=>"Niger",
"Nigeria"=>"Nigeria",
"Norway"=>"Norway",
"Oman"=>"Oman",
"Pakistan"=>"Pakistan",
"Palau"=>"Palau",
"Panama"=>"Panama",
"Papua New Guinea"=>"Papua New Guinea",
"Paraguay"=>"Paraguay",
"Peru"=>"Peru",
"Philippines"=>"Philippines",
"Poland"=>"Poland",
"Portugal"=>"Portugal",
"Puerto Rico"=>"Puerto Rico",
"Qatar"=>"Qatar",
"Romania"=>"Romania",
"Russia"=>"Russia",
"Rwanda"=>"Rwanda",
"Saint Kitts and Nevis"=>"Saint Kitts and Nevis",
"Saint Lucia"=>"Saint Lucia",
"Saint Vincent and the Grenadines"=>"Saint Vincent and the Grenadines",
"Samoa"=>"Samoa",
"San Marino"=>"San Marino",
"Sao Tome and Principe"=>"Sao Tome and Principe",
"Saudi Arabia"=>"Saudi Arabia",
"Senegal"=>"Senegal",
"Serbia and Montenegro"=>"Serbia and Montenegro",
"Seychelles"=>"Seychelles",
"Sierra Leone"=>"Sierra Leone",
"Singapore"=>"Singapore",
"Slovakia"=>"Slovakia",
"Slovenia"=>"Slovenia",
"Solomon Islands"=>"Solomon Islands",
"Somalia"=>"Somalia",
"South Africa"=>"South Africa",
"Spain"=>"Spain",
"Sri Lanka"=>"Sri Lanka",
"Sudan"=>"Sudan",
"Suriname"=>"Suriname",
"Swaziland"=>"Swaziland",
"Sweden"=>"Sweden",
"Switzerland"=>"Switzerland",
"Syria"=>"Syria",
"Taiwan"=>"Taiwan",
"Tajikistan"=>"Tajikistan",
"Tanzania"=>"Tanzania",
"Thailand"=>"Thailand",
"Togo"=>"Togo",
"Tonga"=>"Tonga",
"Trinidad and Tobago"=>"Trinidad and Tobago",
"Tunisia"=>"Tunisia",
"Turkey"=>"Turkey",
"Turkmenistan"=>"Turkmenistan",
"Tuvalu"=>"Tuvalu",
"Uganda"=>"Uganda",
"Ukraine"=>"Ukraine",
"United Arab Emirates"=>"United Arab Emirates",
"Uruguay"=>"Uruguay",
"Uzbekistan"=>"Uzbekistan",
"Vanuatu"=>"Vanuatu",
"Vatican City"=>"Vatican City",
"Venezuela"=>"Venezuela",
"Vietnam"=>"Vietnam",
"Yemen"=>"Yemen",
"Zambia"=>"Zambia",
"Zimbabwe"=>"Zimbabwe",
        )
            ));
 
                         $fields[] = new PMProRH_Field(
        "t_shirt_size",              // input name, will also be used as meta key
         "select",                      // type of field
        array(
            "size"=>40,         // input size
            "profile"=>true,
            "class"=>"col-md-7 col-md-pull-1 input-md pull-right form-control", // custom class
	    "label"=>"T shirt size",	// custom field label
            "required"=>true,    // make this field required
            "memberslistcsv"=>true, // Show this field on the CSV export,
            "options"=>array(       // <option> elements for select field
                "" => "",       // blank option - cannot be selected if this field is required

"Small"=>"Small",
"Medium"=>"Medium",
"Large"=>"Large",
"XL"=>"XL",
"XXL"=>"XXL",
        )
            ));
            
            
 $fields[] = new PMProRH_Field("biog", "textarea", array(
 "rows"=>5, 
 "label"=>"Biography", 
 "class"=>'col-md-7 col-md-pull-1 input-md pull-right form-control',
 "memberslistcsv"=>true,
 "profile"=>true,
  "value"=>"Please list any previous competitions you have entered and achievements, this information will be used over the loudspeakers whilst you compete at the event.",
 "hint"=>"Information to introduce you with on the day. <br>Please keep your input to under 200 words.<br><br>"
 ));
 
   $fields[] = new PMProRH_Field(
        "email_pass",              // input name, will also be used as meta key
        "text",                 // type of field
        array(
            "size"=>40,         // input size
            "class"=>"email_pass", // custom class
	    "label"=>"The users original password at the time of signup",	// custom field label
             "memberslist"=>true, // Show this field on the members list
             "profile"=>"false",
             "readonly"=>true,       // Make this field read-only (uneditable).
        ));
            
    //add the fields into a new checkout_boxes are of the checkout page
    foreach($fields as $field)
        pmprorh_add_registration_field(
            "checkout_boxes", // location on checkout page
            $field            // PMProRH_Field object
        );

    //that's it. see the PMPro Register Helper readme for more information and examples.
   
}



add_action("init", "my_pmprorh_init");