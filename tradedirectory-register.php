<!DOCTYPE html>

<html lang="en">

  <?php include('components/head.php'); ?>

  <body>

    <div id="top"></div>

    <?php
    // setting current page parameter
    $curpage = 'tradedir-register';
    include('components/nav.php');
    // setting optional parameters for header
    $header_bg = 'bluesoft';
    $header_quicklinks = true;
    include('components/header.php');
    include('components/dialog.php');
    ?>

    <section id="intro_banner">

      <div class="header-placeholder u-relative"></div>

      <div class="slides">
        <div class="bxslider">
          <div class="slide" style="background-image: url('images/banner_tradedir.jpg');"></div>
        </div>
      </div>

      <div class="row u-pv4vw">
        <div class="col-md-1 col-md-offset-2 u-aligncenter">
          <i class="icon icon-basicelaboration-folder-plus icon-4x u-block c-white u-mv20"></i>
        </div>
        <div class="col-md-8 c-white">
          <h4 class="u-opacity70">TRADE DIRECTORY</h4>
          <em class="text-huge">Join the fruitful community</em>
          <div>
            <p class="u-mt20">Netherlands Turkey Trade Directory will give you access to almost 250 companies which are actively trading between Turkey and the Netherlands.</p>
          </div>
        </div>
      </div>

    </section>

    <section class="bg-greylight">
      <div class="row">

        <div class="col-md-7 col-md-offset-3">

          <div class="flash flash-error u-hide">
            There were some problems with the form below. Please correct the errors.
          </div>

          <form action="">
            <div class="bg-white content-small u-mv20 u-pb40">

              <h4>Company information</h4>

              <div class="fieldset">
                <label>Name</label>
                <input class="field u-fullwidth" type="text" name="company[name]" placeholder="Name" />
                <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
              </div>
              <div class="fieldset hasError">
                <label>Company Executive</label>
                <input class="field u-fullwidth" type="text" name="company[executive]" placeholder="Company Executive" value="Daniel" />
                <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
              </div>
              <div class="fieldset">
                <label>Website</label>
                <input class="field u-fullwidth" type="url" name="company[executive]" placeholder="Website" />
                <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
              </div>
              <div class="fieldset">
                <label class="u-opacity100">Logo</label>
                <input class="field u-fullwidth" type="file" name="company[avatar]" placeholder="Logo" />
                <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
              </div>
              <div class="fieldset field-select u-inlineblock">
                <label>No. of employees</label>
                <select class="field" style="max-width: 280px;">
                  <option disabled selected>No. of employees</option>
                  <option>1-10</option>
                  <option>11-20</option>
                  <option>21-50</option>
                  <option>51-100</option>
                  <option>101-250</option>
                  <option>251-500</option>
                  <option>501-1000</option>
                  <option>1000+</option>
                </select>
                <i class="icon icon-arrows-down icon-2x u-mt30"></i>
              </div>
              <div class="fieldset fieldset-required">
                <label>Company registration no.</label>
                <input class="field u-fullwidth" type="text" name="company[registration_no]" placeholder="Company registration no." />
                <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
              </div>

            </div>
            <div class="bg-white content-small u-mv20 u-pb40">

              <h4>Contact person</h4>

              <div class="fieldset">
                <label>Name</label>
                <input class="field u-fullwidth" type="text" name="company[contact_person]" placeholder="Name" />
                <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
              </div>
              <div class="fieldset">
                <label>Title</label>
                <input class="field u-fullwidth" type="text" name="company[contact_person_title]" placeholder="Title" />
                <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
              </div>
              <div class="fieldset">
                <label>E-mail</label>
                <input class="field u-fullwidth" type="email" name="company[email]" placeholder="E-mail" />
                <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
              </div>

            </div>
            <div class="bg-white content-small u-mv20 u-pb40">

              <h4>Address information</h4>

              <div class="fieldset field-select fieldset-required">
                <label>City</label>
                <select class="field u-fullwidth">
                  <option disabled selected>City</option>
                  <option>Amsterdam</option>
                  <option>Rotterdam</option>
                  <option>The Hague</option>
                  <option>Utrecht</option>
                  <option>...</option>
                  <option>Adana</option>
                  <option>Adıyaman</option>
                  <option>Ağrı</option>
                  <option>...</option>
                </select>
                <i class="icon icon-arrows-down icon-2x u-mt20"></i>
              </div>

              <div class="fieldset fieldset-required">
                <label>Address</label>
                <textarea class="field u-fullwidth" name="company[address]" placeholder="Address" rows="2" resize="no"></textarea>
                <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
              </div>
              <div class="fieldset fieldset-required">
                <label>Postal code</label>
                <input class="field u-fullwidth" type="text" name="company[zip]" placeholder="Postal Code" />
                <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
              </div>
              <div class="fieldset fieldset-required">
                <label>Phone</label>
                <input class="field u-mr10" type="tel" name="company[phone_ccode]" placeholder="+31" style="width: 30%" />
                <input class="field u-mr10" type="tel" name="company[phone_area]" placeholder="000" style="width: 30%" />
                <input class="field u-mr10" type="tel" name="company[phone]" placeholder="0000000" style="width: 30%" /> 
                <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
              </div>

            </div>
            <div class="bg-white content-small u-mb30">

              <!-- <hr /> -->

              <div class="fieldset field-select">
                <label class="u-opacity100">Sector</label>
                <select class="field u-fullwidth" multiple="multiple" name="company[sector_ids][]" style="height: 200px;">
                  <optgroup label="[A] - Agriculture, forestry and fishing">
                  <option value="22">A1 - Crop and animal production, hunting and related service activities</option>
                  <option value="23">A2 - Forestry and logging</option>
                  <option value="24">A3 - Fishing and aquaculture</option></optgroup><optgroup label="[B] - Mining and quarrying"><option value="25">B5 - Mining of coal and lignite</option>
                  <option value="26">B6 - Extraction of crude petroleum and natural gas</option>
                  <option value="27">B7 - Mining of metal ores</option>
                  <option value="28">B8 - Other mining and quarrying</option>
                  <option value="29">B9 - Mining support service activities</option></optgroup><optgroup label="[C] - Manufacturing"><option value="30">C10 - Manufacture of food products</option>
                  <option value="31">C11 - Manufacture of beverages</option>
                  <option value="32">C12 - Manufacture of tobacco products</option>
                  <option value="33">C13 - Manufacture of textiles</option>
                  <option value="34">C14 - Manufacture of wearing apparel</option>
                  <option value="35">C15 - Manufacture of leather and related products</option>
                  <option value="36">C16 - Manufacture of wood and of products of wood and cork, except furniture; manufacture of articles of straw and plaiting materials</option>
                  <option value="37">C17 - Manufacture of paper and paper products</option>
                  <option value="38">C18 - Printing and reproduction of recorded media</option>
                  <option value="39">C19 - Manufacture of coke and refined petroleum products</option>
                  <option value="40">C20 - Manufacture of chemicals and chemical products</option>
                  <option value="41">C21 - Manufacture of basic pharmaceutical products and pharmaceutical preparations</option>
                  <option value="42">C22 - Manufacture of rubber and plastic products</option>
                  <option value="43">C23 - Manufacture of other non-metallic mineral products</option>
                  <option value="44">C24 - Manufacture of basic metals</option>
                  <option value="45">C25 - Manufacture of fabricated metal products, except machinery and equipment</option>
                  <option value="46">C26 - Manufacture of computer, electronic and optical products</option>
                  <option value="47">C27 - Manufacture of electrical equipment</option>
                  <option value="48">C28 - Manufacture of machinery and equipment n.e.c.</option>
                  <option value="49">C29 - Manufacture of motor vehicles, trailers and semi-trailers</option>
                  <option value="50">C30 - Manufacture of other transport equipment</option>
                  <option value="51">C31 - Manufacture of furniture</option>
                  <option value="52">C32 - Other manufacturing</option>
                  <option value="53">C33 - Repair and installation of machinery and equipment</option></optgroup><optgroup label="[D] - Electricity, gas, steam and air conditioning supply"><option value="54">D35 - Electricity, gas, steam and air conditioning supply</option></optgroup><optgroup label="[E] - Water supply; sewerage; waste managment and remediation activities"><option value="55">E36 - Water collection, treatment and supply</option>
                  <option value="56">E37 - Sewerage</option>
                  <option value="57">E38 - Waste collection, treatment and disposal activities; materials recovery</option>
                  <option value="58">E39 - Remediation activities and other waste management services</option></optgroup><optgroup label="[F] - Construction"><option value="59">F41 - Construction of buildings</option>
                  <option value="60">F42 - Civil engineering</option>
                  <option value="61">F43 - Specialised construction activities</option></optgroup><optgroup label="[G] - Wholesale and retail trade; repair of motor vehicles and motorcycles"><option value="62">G45 - Wholesale and retail trade and repair of motor vehicles and motorcycles</option>
                  <option value="63">G46 - Wholesale trade, except of motor vehicles and motorcycles</option>
                  <option value="64">G47 - Retail trade, except of motor vehicles and motorcycles</option></optgroup><optgroup label="[H] - Transporting and storage"><option value="65">H49 - Land transport and transport via pipelines</option>
                  <option value="66">H50 - Water transport</option>
                  <option value="67">H51 - Air transport</option>
                  <option value="68">H52 - Warehousing and support activities for transportation</option>
                  <option value="69">H53 - Postal and courier activities</option></optgroup><optgroup label="[I] - Accommodation and food service activities"><option value="70">I55 - Accommodation</option>
                  <option value="71">I56 - Food and beverage service activities</option></optgroup><optgroup label="[J] - Information and communication"><option value="72">J58 - Publishing activities</option>
                  <option value="73">J59 - Motion picture, video and television programme production, sound recording and music publishing activities</option>
                  <option value="74">J60 - Programming and broadcasting activities</option>
                  <option value="75">J61 - Telecommunications</option>
                  <option value="76">J62 - Computer programming, consultancy and related activities</option>
                  <option value="77">J63 - Information service activities</option></optgroup><optgroup label="[K] - Financial and insurance activities"><option value="78">K64 - Financial service activities, except insurance and pension funding</option>
                  <option value="79">K65 - Insurance, reinsurance and pension funding, except compulsory social security</option>
                  <option value="80">K66 - Activities auxiliary to financial services and insurance activities</option></optgroup><optgroup label="[L] - Real estate activities"><option value="81">L68 - Real estate activities</option></optgroup><optgroup label="[M] - Professional, scientific and technical activities"><option value="82">M69 - Legal and accounting activities</option>
                  <option value="83">M70 - Activities of head offices; management consultancy activities</option>
                  <option value="84">M71 - Architectural and engineering activities; technical testing and analysis</option>
                  <option value="85">M72 - Scientific research and development</option>
                  <option value="86">M73 - Advertising and market research</option>
                  <option value="87">M74 - Other professional, scientific and technical activities</option>
                  <option value="88">M75 - Veterinary activities</option></optgroup><optgroup label="[N] - Administrative and support service activities"><option value="89">N77 - Rental and leasing activities</option>
                  <option value="90">N78 - Employment activities</option>
                  <option value="91">N79 - Travel agency, tour operator and other reservation service and related activities</option>
                  <option value="92">N80 - Security and investigation activities</option>
                  <option value="93">N81 - Services to buildings and landscape activities</option>
                  <option value="94">N82 - Office administrative, office support and other business support activities</option></optgroup><optgroup label="[O] - Public administration and defence; compulsory social security"><option value="95">O84 - Public administration and defence; compulsory social security</option></optgroup><optgroup label="[P] - Education"><option value="96">P85 - Education</option></optgroup><optgroup label="[Q] - Human health and social work activities"><option value="97">Q86 - Human health activities</option>
                  <option value="98">Q87 - Residential care activities</option>
                  <option value="99">Q88 - Social work activities without accommodation</option></optgroup><optgroup label="[R] - Arts, entertainment and recreation"><option value="100">R90 - Creative, arts and entertainment activities</option>
                  <option value="101">R91 - Libraries, archives, museums and other cultural activities</option>
                  <option value="102">R92 - Gambling and betting activities</option>
                  <option value="103">R93 - Sports activities and amusement and recreation activities</option></optgroup><optgroup label="[S] - Other services activities"><option value="104">S94 - Activities of membership organisations</option>
                  <option value="105">S95 - Repair of computers and personal and household goods</option>
                  <option value="106">S96 - Other personal service activities</option></optgroup><optgroup label="[T] - Activities of households as employers; undifferentiated goods"><option value="107">T97 - Activities of households as employers of domestic personnel</option>
                  <option value="108">T98 - Undifferentiated goods- and services-producing activities of private households for own use</option></optgroup><optgroup label="[U] - Activities of extraterritorial organisations and bodies"><option value="109">U99 - Activities of extraterritorial organisations and bodies</option></optgroup>
                </select>
              </div>

              <div class="fieldset field-select">
                <label>Link with The Netherlands</label>
                <select class="field u-fullwidth" name="company[link_type_id]">
                  <option disabled selected>Link with The Netherlands</option>
                  <option value="1">My company is a local subsidiary of a Dutch firm</option>
                  <option value="2">My company is a joint-venture with a Dutch firm</option>
                  <option value="3">My company has a subsidiary in the Netherlands</option>
                  <option value="4">My company represents a Dutch company in Turkey</option>
                  <option value="5">My company has a cooperation agreement with a Dutch company</option>
                  <option value="6">I am a Dutch citizen managing my own company in Turkey</option>
                  <option value="254">Other (please specify)</option>
                </select>
                <input class="field u-fullwidth u-mt10 u-hide" type="text" name="company[link_other]" placeholder="Please specify..." />
                <i class="icon icon-arrows-down icon-2x u-mt20"></i>
              </div>

              <div class="fieldset fieldset-required">
                <label>Profile description (max 900 characters)</label>
                <textarea class="field u-fullwidth" name="company[profile]" placeholder="Profile description (max 900 characters)" rows="4" resize="no"></textarea>
                <small class="c-greymedium"><em>History, Main Products & Services, Core Activities</em></small>
                <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
              </div>

            </div>
            <div class="bg-white content-small u-mb30">

              <div class="fieldset field-select">
                <label>How did you hear about us?</label>
                <select class="field u-fullwidth" name="company[hear_about_id]">
                  <option disabled selected>How did you hear about us?</option>
                  <option value="1">Direct Traffic</option>
                  <option value="2">Search Engines</option>
                  <option value="3">Direct Emailing via IST-NTTD</option>
                  <option value="4">Dutch Business Luncheon Meetings</option>
                  <option value="5">www.nl.org.tr - Consulate-General of the Kingdom of the Netherlands in Istanbul</option>
                  <option value="6">www.agentschapnl.nl - Agency for International Business and Cooperation (NL EVD International within NL Agency)</option>
                  <option value="7">www.nfia-turkey.com - Netherlands Foreign Investment Agency</option>
                </select>
                <input class="field u-fullwidth u-mt10 u-hide" type="text" name="company[link_other]" placeholder="Please specify..." />
                <i class="icon icon-arrows-down icon-2x u-mt20"></i>
              </div>

              <div class="fieldset fieldset-checkbox u-mb40 u-mv40">
                <input class="field" type="checkbox" id="company_invitation" name="company[invitation]" />
                <label for="company_invitation">I would like to receive invitations to Monthly Dutch Business Cocktails.</label>
                <div class="field-validation" style="display: none;">Please accept the terms and conditions.</div>
              </div>

              <div class="fieldset fieldset-checkbox">
                <input class="field" type="checkbox" id="company_confirmation" name="company[confirmation]" />
                <label for="company_confirmation">I hereby confirm the accuracy and completeness of the information which I have provided and I assume the entire legal responsibility for it.</label>
                <small class="c-greymedium">By completing this form, I acknowledge that new profiles and adjustments on the existing profiles are subject to initial approval whereas only authorized profiles will be admitted to NTTD. Please click on the Submit button to complete the registration process.</small>
                <div class="field-validation" style="display: none;">Please accept the terms and conditions.</div>
              </div>

              <div class="u-alignright u-mt40">
                <button type="submit" class="btn btn-primary">Create Company</button>
              </div>

            </div>

          </form>

        </div>

    </section>

    <?php include('components/footer.php'); ?>

  </body>

</html>
