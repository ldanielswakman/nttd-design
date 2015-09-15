<!DOCTYPE html>

<html lang="en">

  <?php include('components/head.php'); ?>

  <body>

    <div id="top"></div>

    <?php
    // setting current page parameter
    $curpage = 'tradedirectory';
    include('components/nav.php');
    // setting optional parameters for header
    $header_bg = 'orange';
    $header_quicklinks = true;
    include('components/header.php')
    ?>

    <section id="intro">

      <div class="header-placeholder u-relative"></div>

      <div class="slides">
        <div class="slide" style="background-image: url('images/maslak_soft.jpg');"></div>
      </div>

      <div class="row u-pv80">
        <div class="col-md-1 col-md-offset-2 u-aligncenter">
          <i class="icon icon-basicelaboration-folder-plus icon-4x u-block c-white u-mv20"></i>
        </div>
        <div class="col-md-8 c-white">
          <h4 class="u-opacity50">TRADE DIRECTORY</h4>
          <em style="font-size: 3em;">Join the fruitful community</em>
          <div>
            <p class="u-mt20">Netherlands Turkey Trade Directory will give you access to almost 250 companies which are actively trading between Turkey and the Netherlands.</p>
          </div>
        </div>
      </div>

    </section>

    <section>
      <div class="row">

        <div class="col-md-7 col-md-offset-3">

          <div class="flash flash-error u-hide">
            There were some problems with the form below. Please correct the errors.
          </div>

          <form action="" class="bg-white content-small">

            <h4>Company information</h4>

            <div class="fieldset">
              <label>Name</label>
              <input class="field u-fullwidth" type="text" name="company[name]" placeholder="Name" />
              <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
            </div>
            <div class="fieldset">
              <label>Short name/brand name</label>
              <input class="field u-fullwidth" type="text" name="company[short_name]" placeholder="Short name/brand name" />
              <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
            </div>
            <div class="fieldset hasError">
              <label>Company Executive</label>
              <input class="field u-fullwidth" type="text" name="company[executive]" placeholder="Company Executive" value="Daniel" />
              <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
            </div>
            <div class="fieldset">
              <label>Serving since (year)</label>
              <input class="field" type="number" maxlength="4" min="0" name="company[since]" placeholder="Service since (year)" />
              <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
            </div>
            <div class="fieldset">
              <label>Website</label>
              <input class="field u-fullwidth" type="url" name="company[executive]" placeholder="Website" />
              <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
            </div>
            <div class="fieldset">
              <label class="u-opacity100">Executive picture</label>
              <input class="field u-fullwidth" type="file" name="company[avatar]" placeholder="Executive picture" />
              <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
            </div>

            <hr />

            <div class="fieldset field-select">
              <label class="u-opacity100">Sector</label>
              <select class="field u-fullwidth" multiple="multiple" name="company[sector_ids][]"><optgroup label="[A] - Agriculture, forestry and fishing"><option value="22">A1 - Crop and animal production, hunting and related service activities</option>
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

            <hr />

            <div class="fieldset fieldset-checkbox">
              <input class="field" type="checkbox" id="company_confirmation" name="company[confirmation]" />
              <label for="company_confirmation">I hereby confirm that I filled out everything correctly and agree with the Terms and Conditions.</label>
              <div class="field-validation" style="display: none;">Please accept the terms and conditions.</div>
            </div>

            <div class="u-alignright u-mv40">
              <button type="submit" class="btn btn-primary">Create Company</button>
            </div>

          </form>

        </div>

    </section>

    <?php include('components/footer.php'); ?>

  </body>

</html>
