@extends('leads.leads.layout.principal')
@section('title', 'leads')
@section('content-leads')
<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Leads</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Create</li>
            </ul>
        </div>
        <div class="page-header-right ms-auto">
            <div class="page-header-right-items">
                <div class="d-flex d-md-none">
                    <a href="javascript:void(0)" class="page-header-right-close-toggle">
                        <i class="feather-arrow-left me-2"></i>
                        <span>Back</span>
                    </a>
                </div>
                <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                    <a href="javascript:void(0);" class="btn btn-light-brand successAlertMessage">
                        <i class="feather-layers me-2"></i>
                        <span>Save as Draft</span>
                    </a>
                    <a href="javascript:void(0);" class="btn btn-primary successAlertMessage">
                        <i class="feather-user-plus me-2"></i>
                        <span>Create Lead</span>
                    </a>
                </div>
            </div>
            <div class="d-md-none d-flex align-items-center">
                <a href="javascript:void(0)" class="page-header-right-open-toggle">
                    <i class="feather-align-right fs-20"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- [ page-header ] end -->
    <!-- [ Main Content ] start -->
    <div class="main-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card stretch stretch-full">
                    <div class="card-body lead-status">
                        <div class="mb-5 d-flex align-items-center justify-content-between">
                            <h5 class="fw-bold mb-0 me-4">
                                <span class="d-block mb-2">Lead Status :</span>
                                <span class="fs-12 fw-normal text-muted text-truncate-1-line">Typically refers to adding a new potential customer or sales prospect</span>
                            </h5>
                            <a href="javascript:void(0);" class="btn btn-sm btn-light-brand">Create Invoice</a>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 mb-4">
                                <label class="form-label">Status</label>
                                <select class="form-control" data-select2-selector="status">
                                    <option value="primary" data-bg="bg-primary">New</option>
                                    <option value="teal" data-bg="bg-teal">Contacted</option>
                                    <option value="warning" data-bg="bg-warning">Working</option>
                                    <option value="success" data-bg="bg-success">Qualified</option>
                                    <option value="danger" data-bg="bg-danger">Declined</option>
                                    <option value="indigo" data-bg="bg-indigo">Customer</option>
                                </select>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <label class="form-label">Source</label>
                                <select class="form-control" data-select2-selector="icon">
                                    <option value="facebook" data-icon="feather-facebook">Facebook</option>
                                    <option value="twitter" data-icon="feather-twitter">Twitter</option>
                                    <option value="instagram" data-icon="feather-instagram">Instagram</option>
                                    <option value="linkedin" data-icon="feather-linkedin">Linkedin</option>
                                    <option value="search" data-icon="feather-search">Search Engine</option>
                                    <option value="other" data-icon="feather-compass">Others</option>
                                </select>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <label class="form-label">Visibility:</label>
                                <select class="form-select form-control" data-select2-selector="visibility">
                                    <option value="public" data-icon="feather-globe">Public</option>
                                    <option value="private" data-icon="feather-lock">Private</option>
                                    <option value="private" data-icon="feather-user">Personal</option>
                                    <option value="customs" data-icon="feather-settings">Customs</option>
                                </select>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <label class="form-label">Tags</label>
                                <select class="form-select form-control" data-select2-selector="tag" multiple>
                                    <option value="success" data-bg="bg-success">VIP</option>
                                    <option value="info" data-bg="bg-info">Bugs</option>
                                    <option value="primary" data-bg="bg-primary">Team</option>
                                    <option value="teal" data-bg="bg-teal">Primary</option>
                                    <option value="success" data-bg="bg-success">Updates</option>
                                    <option value="warning" data-bg="bg-warning">Personal</option>
                                    <option value="danger" data-bg="bg-danger">Promotions</option>
                                    <option value="indigo" data-bg="bg-indigo">Customs</option>
                                    <option value="primary" data-bg="bg-primary">Wholesale</option>
                                    <option value="danger" data-bg="bg-danger">Low Budget</option>
                                    <option value="teal" data-bg="bg-teal">High Budget</option>
                                </select>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <label class="form-label">Assigned</label>
                                <select class="form-select form-control" data-select2-selector="user" multiple>
                                    <option value="alex@outlook.com" data-user="1">alex@outlook.com</option>
                                    <option value="john.deo@outlook.com" data-user="2">john.deo@outlook.com</option>
                                    <option value="green.cutte@outlook.com" data-user="3">green.cutte@outlook.com</option>
                                    <option value="nancy.elliot@outlook.com" data-user="4">nancy.elliot@outlook.com</option>
                                    <option value="mar.audrey@gmail.com" data-user="5">mar.audrey@gmail.com</option>
                                    <option value="erna.serpa@outlook.com" data-user="6">erna.serpa@outlook.com</option>
                                    <option value="green.cutte@outlook.com" data-user="7">green.cutte@outlook.com</option>
                                    <option value="nancy.elliot@outlook.com" data-user="8">nancy.elliot@outlook.com</option>
                                    <option value="mar.audrey@gmail.com" data-user="9">mar.audrey@gmail.com</option>
                                    <option value="erna.serpa@outlook.com" data-user="10">erna.serpa@outlook.com</option>
                                    <option value="mar.audrey@gmail.com" data-user="11">mar.audrey@gmail.com</option>
                                    <option value="erna.serpa@outlook.com" data-user="12">erna.serpa@outlook.com</option>
                                </select>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <label class="form-label">Groups</label>
                                <select class="form-control" data-select2-selector="tag" multiple>
                                    <option value="success" data-bg="bg-success">Group-A</option>
                                    <option value="dark" data-bg="bg-dark">Group-B</option>
                                    <option value="primary" data-bg="bg-primary">Group-C</option>
                                    <option value="teal" data-bg="bg-teal">Group-D</option>
                                    <option value="success" data-bg="bg-success">Group-E</option>
                                    <option value="warning" data-bg="bg-warning">Group-F</option>
                                    <option value="danger" data-bg="bg-danger">Group-G</option>
                                    <option value="indigo" data-bg="bg-indigo">Group-H</option>
                                    <option value="primary" data-bg="bg-primary">Group-I</option>
                                    <option value="danger" data-bg="bg-danger">Group-J</option>
                                    <option value="teal" data-bg="bg-teal">Group-K</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-0">
                    <div class="card-body general-info">
                        <div class="mb-5 d-flex align-items-center justify-content-between">
                            <h5 class="fw-bold mb-0 me-4">
                                <span class="d-block mb-2">Lead Info :</span>
                                <span class="fs-12 fw-normal text-muted text-truncate-1-line">General information for your lead</span>
                            </h5>
                            <a href="javascript:void(0);" class="btn btn-sm btn-light-brand">Edit Lead</a>
                        </div>
                        <div class="row mb-4 align-items-center">
                            <div class="col-lg-4">
                                <label for="fullnameInput" class="fw-semibold">Name: </label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <div class="input-group-text"><i class="feather-user"></i></div>
                                    <input type="text" class="form-control" id="fullnameInput" placeholder="Name">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4 align-items-center">
                            <div class="col-lg-4">
                                <label for="mailInput" class="fw-semibold">Email: </label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <div class="input-group-text"><i class="feather-mail"></i></div>
                                    <input type="text" class="form-control" id="mailInput" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4 align-items-center">
                            <div class="col-lg-4">
                                <label for="usernameInput" class="fw-semibold">Username: </label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <div class="input-group-text"><i class="feather-link-2"></i></div>
                                    <input type="url" class="form-control" id="usernameInput" placeholder="Username">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4 align-items-center">
                            <div class="col-lg-4">
                                <label for="phoneInput" class="fw-semibold">Phone: </label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <div class="input-group-text"><i class="feather-phone"></i></div>
                                    <input type="text" class="form-control" id="phoneInput" placeholder="Phone">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4 align-items-center">
                            <div class="col-lg-4">
                                <label for="companyInput" class="fw-semibold">Company: </label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <div class="input-group-text"><i class="feather-compass"></i></div>
                                    <input type="text" class="form-control" id="companyInput" placeholder="Company">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4 align-items-center">
                            <div class="col-lg-4">
                                <label for="designationInput" class="fw-semibold">Designation: </label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <div class="input-group-text"><i class="feather-briefcase"></i></div>
                                    <input type="text" class="form-control" id="designationInput" placeholder="Designation">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4 align-items-center">
                            <div class="col-lg-4">
                                <label for="websiteInput" class="fw-semibold">Website: </label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <div class="input-group-text"><i class="feather-link"></i></div>
                                    <input type="text" class="form-control" id="websiteInput" placeholder="Website">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4 align-items-center">
                            <div class="col-lg-4">
                                <label for="VATInput" class="fw-semibold">VAT: </label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <div class="input-group-text"><i class="feather-dollar-sign"></i></div>
                                    <input type="text" class="form-control" id="VATInput" placeholder="VAT">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4 align-items-center">
                            <div class="col-lg-4">
                                <label for="addressInput" class="fw-semibold">Address: </label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <div class="input-group-text"><i class="feather-map-pin"></i></div>
                                    <textarea class="form-control" id="addressInput" cols="30" rows="3" placeholder="Address"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4 align-items-center">
                            <div class="col-lg-4">
                                <label for="descriptionInput" class="fw-semibold">Description: </label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <div class="input-group-text"><i class="feather-type"></i></div>
                                    <textarea class="form-control" id="descriptionInput" cols="30" rows="5" placeholder="Description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4 align-items-center">
                            <div class="col-lg-4">
                                <label class="fw-semibold">Country: </label>
                            </div>
                            <div class="col-lg-8">
                                <select class="form-control" data-select2-selector="country">
                                    <option data-country="af">Afghanistan</option>
                                    <option data-country="ax">Åland Islands</option>
                                    <option data-country="al">Albania</option>
                                    <option data-country="dz">Algeria</option>
                                    <option data-country="as">American Samoa</option>
                                    <option data-country="ad">Andorra</option>
                                    <option data-country="ao">Angola</option>
                                    <option data-country="ai">Anguilla</option>
                                    <option data-country="aq">Antarctica</option>
                                    <option data-country="ag">Antigua & Barbuda</option>
                                    <option data-country="ar">Argentina</option>
                                    <option data-country="am">Armenia</option>
                                    <option data-country="aw">Aruba</option>
                                    <option data-country="au">Australia</option>
                                    <option data-country="at">Austria</option>
                                    <option data-country="az">Azerbaijan</option>
                                    <option data-country="bs">Bahamas</option>
                                    <option data-country="bh">Bahrain</option>
                                    <option data-country="bd">Bangladesh</option>
                                    <option data-country="bb">Barbados</option>
                                    <option data-country="by">Belarus</option>
                                    <option data-country="be">Belgium</option>
                                    <option data-country="bz">Belize</option>
                                    <option data-country="bj">Benin</option>
                                    <option data-country="bm">Bermuda</option>
                                    <option data-country="bt">Bhutan</option>
                                    <option data-country="bo">Bolivia</option>
                                    <option data-country="bq">Caribbean Netherlands</option>
                                    <option data-country="ba">Bosnia & Herzegovina</option>
                                    <option data-country="bw">Botswana</option>
                                    <option data-country="bv">Bouvet Island</option>
                                    <option data-country="br">Brazil</option>
                                    <option data-country="io">British Indian Ocean Territory</option>
                                    <option data-country="bn">Brunei</option>
                                    <option data-country="bg">Bulgaria</option>
                                    <option data-country="bf">Burkina Faso</option>
                                    <option data-country="bi">Burundi</option>
                                    <option data-country="kh">Cambodia</option>
                                    <option data-country="cm">Cameroon</option>
                                    <option data-country="ca">Canada</option>
                                    <option data-country="cv">Cape Verde</option>
                                    <option data-country="ky">Cayman Islands</option>
                                    <option data-country="cf">Central African Republic</option>
                                    <option data-country="td">Chad</option>
                                    <option data-country="cl">Chile</option>
                                    <option data-country="cn">China</option>
                                    <option data-country="cx">Christmas Island</option>
                                    <option data-country="cc">Cocos (Keeling) Islands</option>
                                    <option data-country="co">Colombia</option>
                                    <option data-country="km">Comoros</option>
                                    <option data-country="cg">Congo - Brazzaville</option>
                                    <option data-country="cd">Congo - Kinshasa</option>
                                    <option data-country="ck">Cook Islands</option>
                                    <option data-country="cr">Costa Rica</option>
                                    <option data-country="ci">Côte d'Ivoire</option>
                                    <option data-country="hr">Croatia</option>
                                    <option data-country="cu">Cuba</option>
                                    <option data-country="cu">Curaçao</option>
                                    <option data-country="cy">Cyprus</option>
                                    <option data-country="cz">Czechia</option>
                                    <option data-country="dk">Denmark</option>
                                    <option data-country="dj">Djibouti</option>
                                    <option data-country="dm">Dominica</option>
                                    <option data-country="do">Dominican Republic</option>
                                    <option data-country="ec">Ecuador</option>
                                    <option data-country="eg">Egypt</option>
                                    <option data-country="sv">El Salvador</option>
                                    <option data-country="gq">Equatorial Guinea</option>
                                    <option data-country="er">Eritrea</option>
                                    <option data-country="ee">Estonia</option>
                                    <option data-country="et">Ethiopia</option>
                                    <option data-country="fk">Falkland Islands (Islas Malvinas)</option>
                                    <option data-country="fo">Faroe Islands</option>
                                    <option data-country="fj">Fiji</option>
                                    <option data-country="fi">Finland</option>
                                    <option data-country="fr">France</option>
                                    <option data-country="gf">French Guiana</option>
                                    <option data-country="pf">French Polynesia</option>
                                    <option data-country="tf">French Southern Territories</option>
                                    <option data-country="ga">Gabon</option>
                                    <option data-country="gm">Gambia</option>
                                    <option data-country="ge">Georgia</option>
                                    <option data-country="de">Germany</option>
                                    <option data-country="gh">Ghana</option>
                                    <option data-country="gi">Gibraltar</option>
                                    <option data-country="gr">Greece</option>
                                    <option data-country="gl">Greenland</option>
                                    <option data-country="gd">Grenada</option>
                                    <option data-country="gp">Guadeloupe</option>
                                    <option data-country="gu">Guam</option>
                                    <option data-country="gt">Guatemala</option>
                                    <option data-country="gg">Guernsey</option>
                                    <option data-country="gn">Guinea</option>
                                    <option data-country="gw">Guinea-Bissau</option>
                                    <option data-country="gy">Guyana</option>
                                    <option data-country="ht">Haiti</option>
                                    <option data-country="hm">Heard & McDonald Islands</option>
                                    <option data-country="va">Vatican City</option>
                                    <option data-country="hn">Honduras</option>
                                    <option data-country="hk">Hong Kong</option>
                                    <option data-country="hu">Hungary</option>
                                    <option data-country="is">Iceland</option>
                                    <option data-country="in">India</option>
                                    <option data-country="id">Indonesia</option>
                                    <option data-country="ir">Iran</option>
                                    <option data-country="iq">Iraq</option>
                                    <option data-country="ie">Ireland</option>
                                    <option data-country="im">Isle of Man</option>
                                    <option data-country="il">Israel</option>
                                    <option data-country="it">Italy</option>
                                    <option data-country="jm">Jamaica</option>
                                    <option data-country="jp">Japan</option>
                                    <option data-country="je">Jersey</option>
                                    <option data-country="jo">Jordan</option>
                                    <option data-country="kz">Kazakhstan</option>
                                    <option data-country="ke">Kenya</option>
                                    <option data-country="ki">Kiribati</option>
                                    <option data-country="kp">North Korea</option>
                                    <option data-country="kr">South Korea</option>
                                    <option data-country="xk">Kosovo</option>
                                    <option data-country="kw">Kuwait</option>
                                    <option data-country="kg">Kyrgyzstan</option>
                                    <option data-country="la">Laos</option>
                                    <option data-country="lv">Latvia</option>
                                    <option data-country="lb">Lebanon</option>
                                    <option data-country="ls">Lesotho</option>
                                    <option data-country="lr">Liberia</option>
                                    <option data-country="ly">Libya</option>
                                    <option data-country="li">Liechtenstein</option>
                                    <option data-country="lt">Lithuania</option>
                                    <option data-country="lu">Luxembourg</option>
                                    <option data-country="mo">Macao</option>
                                    <option data-country="mk">North Macedonia</option>
                                    <option data-country="mg">Madagascar</option>
                                    <option data-country="mw">Malawi</option>
                                    <option data-country="my">Malaysia</option>
                                    <option data-country="mv">Maldives</option>
                                    <option data-country="ml">Mali</option>
                                    <option data-country="mt">Malta</option>
                                    <option data-country="mh">Marshall Islands</option>
                                    <option data-country="mq">Martinique</option>
                                    <option data-country="mr">Mauritania</option>
                                    <option data-country="mu">Mauritius</option>
                                    <option data-country="yt">Mayotte</option>
                                    <option data-country="mx">Mexico</option>
                                    <option data-country="fm">Micronesia</option>
                                    <option data-country="md">Moldova</option>
                                    <option data-country="mc">Monaco</option>
                                    <option data-country="mn">Mongolia</option>
                                    <option data-country="me">Montenegro</option>
                                    <option data-country="ms">Montserrat</option>
                                    <option data-country="ma">Morocco</option>
                                    <option data-country="mz">Mozambique</option>
                                    <option data-country="mm">Myanmar (Burma)</option>
                                    <option data-country="na">Namibia</option>
                                    <option data-country="nr">Nauru</option>
                                    <option data-country="np">Nepal</option>
                                    <option data-country="nl">Netherlands</option>
                                    <option data-country="cu">Curaçao</option>
                                    <option data-country="nc">New Caledonia</option>
                                    <option data-country="nz">New Zealand</option>
                                    <option data-country="ni">Nicaragua</option>
                                    <option data-country="ne">Niger</option>
                                    <option data-country="ng">Nigeria</option>
                                    <option data-country="nu">Niue</option>
                                    <option data-country="nf">Norfolk Island</option>
                                    <option data-country="mp">Northern Mariana Islands</option>
                                    <option data-country="no">Norway</option>
                                    <option data-country="om">Oman</option>
                                    <option data-country="pk">Pakistan</option>
                                    <option data-country="pw">Palau</option>
                                    <option data-country="ps">Palestine</option>
                                    <option data-country="pa">Panama</option>
                                    <option data-country="pg">Papua New Guinea</option>
                                    <option data-country="py">Paraguay</option>
                                    <option data-country="pe">Peru</option>
                                    <option data-country="ph">Philippines</option>
                                    <option data-country="pn">Pitcairn Islands</option>
                                    <option data-country="pl">Poland</option>
                                    <option data-country="pt">Portugal</option>
                                    <option data-country="pr">Puerto Rico</option>
                                    <option data-country="qa">Qatar</option>
                                    <option data-country="re">Réunion</option>
                                    <option data-country="ro">Romania</option>
                                    <option data-country="ru">Russia</option>
                                    <option data-country="rw">Rwanda</option>
                                    <option data-country="bl">St. Barthélemy</option>
                                    <option data-country="sh">St. Helena</option>
                                    <option data-country="kn">St. Kitts & Nevis</option>
                                    <option data-country="lc">St. Lucia</option>
                                    <option data-country="mf">St. Martin</option>
                                    <option data-country="pm">St. Pierre & Miquelon</option>
                                    <option data-country="vc">St. Vincent & Grenadines</option>
                                    <option data-country="ws">Samoa</option>
                                    <option data-country="sm">San Marino</option>
                                    <option data-country="st">São Tomé & Príncipe</option>
                                    <option data-country="sa">Saudi Arabia</option>
                                    <option data-country="sn">Senegal</option>
                                    <option data-country="rs">Serbia</option>
                                    <option data-country="sr">Serbia</option>
                                    <option data-country="sc">Seychelles</option>
                                    <option data-country="sl">Sierra Leone</option>
                                    <option data-country="sg">Singapore</option>
                                    <option data-country="sx">Sint Maarten</option>
                                    <option data-country="sk">Slovakia</option>
                                    <option data-country="si">Slovenia</option>
                                    <option data-country="sb">Solomon Islands</option>
                                    <option data-country="so">Somalia</option>
                                    <option data-country="za">South Africa</option>
                                    <option data-country="gs">South Georgia & South Sandwich Islands</option>
                                    <option data-country="ss">South Sudan</option>
                                    <option data-country="es">Spain</option>
                                    <option data-country="lk">Sri Lanka</option>
                                    <option data-country="sd">Sudan</option>
                                    <option data-country="sr">Suriname</option>
                                    <option data-country="sj">Svalbard & Jan Mayen</option>
                                    <option data-country="sz">Eswatini</option>
                                    <option data-country="se">Sweden</option>
                                    <option data-country="ch">Switzerland</option>
                                    <option data-country="sy">Syria</option>
                                    <option data-country="tw">Taiwan</option>
                                    <option data-country="tj">Tajikistan</option>
                                    <option data-country="tz">Tanzania</option>
                                    <option data-country="th">Thailand</option>
                                    <option data-country="tl">Timor-Leste</option>
                                    <option data-country="tg">Togo</option>
                                    <option data-country="tk">Tokelau</option>
                                    <option data-country="to">Tonga</option>
                                    <option data-country="tt">Trinidad & Tobago</option>
                                    <option data-country="tn">Tunisia</option>
                                    <option data-country="tr">Turkey</option>
                                    <option data-country="tm">Turkmenistan</option>
                                    <option data-country="tc">Turks & Caicos Islands</option>
                                    <option data-country="tv">Tuvalu</option>
                                    <option data-country="ug">Uganda</option>
                                    <option data-country="ua">Ukraine</option>
                                    <option data-country="ae">United Arab Emirates</option>
                                    <option data-country="gb">United Kingdom</option>
                                    <option data-country="us" selected>United States</option>
                                    <option data-country="um">U.S. Outlying Islands</option>
                                    <option data-country="uy">Uruguay</option>
                                    <option data-country="uz">Uzbekistan</option>
                                    <option data-country="vu">Vanuatu</option>
                                    <option data-country="ve">Venezuela</option>
                                    <option data-country="vn">Vietnam</option>
                                    <option data-country="vg">British Virgin Islands</option>
                                    <option data-country="vi">U.S. Virgin Islands</option>
                                    <option data-country="wf">Wallis & Futuna</option>
                                    <option data-country="eh">Western Sahara</option>
                                    <option data-country="ye">Yemen</option>
                                    <option data-country="zm">Zambia</option>
                                    <option data-country="zw">Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4 align-items-center">
                            <div class="col-lg-4">
                                <label class="fw-semibold">State: </label>
                            </div>
                            <div class="col-lg-8">
                                <select class="form-control" data-select2-selector="state">
                                    <option data-state="al">Alabama</option>
                                    <option data-state="ak" selected>Alaska</option>
                                    <option data-state="as">American Samoa</option>
                                    <option data-state="az">Arizona</option>
                                    <option data-state="ar">Arkansas</option>
                                    <option data-state="um">Baker Island</option>
                                    <option data-state="ca">California</option>
                                    <option data-state="co">Colorado</option>
                                    <option data-state="ct">Connecticut</option>
                                    <option data-state="de">Delaware</option>
                                    <option data-state="dc">District of Columbia</option>
                                    <option data-state="fl">Florida</option>
                                    <option data-state="ga">Georgia</option>
                                    <option data-state="gu">Guam</option>
                                    <option data-state="hi">Hawaii</option>
                                    <option data-state="um">Howland Island</option>
                                    <option data-state="id">Idaho</option>
                                    <option data-state="il">Illinois</option>
                                    <option data-state="in">Indiana</option>
                                    <option data-state="ia">Iowa</option>
                                    <option data-state="um">Jarvis Island</option>
                                    <option data-state="um">Johnston Atoll</option>
                                    <option data-state="ks">Kansas</option>
                                    <option data-state="ky">Kentucky</option>
                                    <option data-state="um">Kingman Reef</option>
                                    <option data-state="la">Louisiana</option>
                                    <option data-state="me">Maine</option>
                                    <option data-state="md">Maryland</option>
                                    <option data-state="ma">Massachusetts</option>
                                    <option data-state="mi">Michigan</option>
                                    <option data-state="um">Midway Atoll</option>
                                    <option data-state="mn">Minnesota</option>
                                    <option data-state="ms">Mississippi</option>
                                    <option data-state="mo">Missouri</option>
                                    <option data-state="mt">Montana</option>
                                    <option data-state="um">Navassa Island</option>
                                    <option data-state="ne">Nebraska</option>
                                    <option data-state="nv">Nevada</option>
                                    <option data-state="nh">New Hampshire</option>
                                    <option data-state="nj">New Jersey</option>
                                    <option data-state="nm">New Mexico</option>
                                    <option data-state="ny">New York</option>
                                    <option data-state="nc">North Carolina</option>
                                    <option data-state="nd">North Dakota</option>
                                    <option data-state="mp">Northern Mariana Islands</option>
                                    <option data-state="oh">Ohio</option>
                                    <option data-state="ok">Oklahoma</option>
                                    <option data-state="or">Oregon</option>
                                    <option data-state="um">Palmyra Atoll</option>
                                    <option data-state="pa">Pennsylvania</option>
                                    <option data-state="pr">Puerto Rico</option>
                                    <option data-state="ri">Rhode Island</option>
                                    <option data-state="sc">South Carolina</option>
                                    <option data-state="sd">South Dakota</option>
                                    <option data-state="tn">Tennessee</option>
                                    <option data-state="tx">Texas</option>
                                    <option data-state="um">United States Minor Outlying Islands</option>
                                    <option data-state="vi">United States Virgin Islands</option>
                                    <option data-state="ut">Utah</option>
                                    <option data-state="vt">Vermont</option>
                                    <option data-state="va">Virginia</option>
                                    <option data-state="um">Wake Island</option>
                                    <option data-state="wa">Washington</option>
                                    <option data-state="wv">West Virginia</option>
                                    <option data-state="wi">Wisconsin</option>
                                    <option data-state="wy">Wyoming</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4 align-items-center">
                            <div class="col-lg-4">
                                <label class="fw-semibold">City: </label>
                            </div>
                            <div class="col-lg-8">
                                <select class="form-control" data-select2-selector="city">
                                    <option data-city="bg-primary">Akutan</option>
                                    <option data-city="bg-secondary">Aleutians East Borough</option>
                                    <option data-city="bg-success">Aleutians West Census Area</option>
                                    <option data-city="bg-warning">Anchor Point</option>
                                    <option data-city="bg-info">Anchorage</option>
                                    <option data-city="bg-danger">Anchorage Municipality</option>
                                    <option data-city="bg-dark">Badger</option>
                                    <option data-city="bg-black">Barrow</option>
                                    <option data-city="bg-muted">Bear Creek</option>
                                    <option data-city="bg-blue">Bethel</option>
                                    <option data-city="bg-teal">Bethel Census Area</option>
                                    <option data-city="bg-cyan">Big Lake</option>
                                    <option data-city="bg-indigo">Bristol Bay Borough</option>
                                    <option data-city="bg-green">Butte</option>
                                    <option data-city="bg-red">Chevak</option>
                                    <option data-city="bg-orange">City and Borough of Wrangell</option>
                                    <option data-city="bg-darken">Cohoe</option>
                                    <option data-city="bg-primary">College</option>
                                    <option data-city="bg-warning">Cordova</option>
                                    <option data-city="bg-danger">Craig</option>
                                    <option data-city="bg-red">Deltana</option>
                                    <option data-city="bg-green">Denali Borough</option>
                                    <option data-city="bg-orange">Diamond Ridge</option>
                                    <option data-city="bg-muted">Dillingham</option>
                                    <option data-city="bg-teal">Dillingham Census Area</option>
                                    <option data-city="bg-info">Dutch Harbor</option>
                                    <option data-city="bg-indigo">Eagle River</option>
                                    <option data-city="bg-cyan">Eielson Air Force Base</option>
                                    <option data-city="bg-orange">Elmendorf Air Force Base</option>
                                    <option data-city="bg-black">Ester</option>
                                    <option data-city="bg-warning">Fairbanks</option>
                                    <option data-city="bg-green">Fairbanks North Star Borough</option>
                                    <option data-city="bg-indigo">Farm Loop</option>
                                    <option data-city="bg-danger">Farmers Loop</option>
                                    <option data-city="bg-success">Fishhook</option>
                                    <option data-city="bg-teal">Fritz Creek</option>
                                    <option data-city="bg-cyan">Gateway</option>
                                    <option data-city="bg-black">Girdwood</option>
                                    <option data-city="bg-warning">Haines</option>
                                    <option data-city="bg-green">Haines Borough</option>
                                    <option data-city="bg-indigo">Healy</option>
                                    <option data-city="bg-danger">Homer</option>
                                    <option data-city="bg-success">Hoonah-Angoon Census Area</option>
                                    <option data-city="bg-teal">Hooper Bay</option>
                                    <option data-city="bg-cyan">Houston</option>
                                    <option data-city="bg-warning">Juneau</option>
                                    <option data-city="bg-black">Kalifornsky</option>
                                    <option data-city="bg-green">Kenai</option>
                                    <option data-city="bg-danger">Kenai Peninsula Borough</option>
                                    <option data-city="bg-success">Ketchikan</option>
                                    <option data-city="bg-indigo">Ketchikan Gateway Borough</option>
                                    <option data-city="bg-teal" selected>King Cove</option>
                                    <option data-city="bg-black">Knik-Fairview</option>
                                    <option data-city="bg-green">Kodiak</option>
                                    <option data-city="bg-cyan">Kodiak Island Borough</option>
                                    <option data-city="bg-warning">Kodiak Station</option>
                                    <option data-city="bg-darken">Kotzebue</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4 align-items-center">
                            <div class="col-lg-4">
                                <label class="fw-semibold">Time Zone: </label>
                            </div>
                            <div class="col-lg-8">
                                <select class="form-control" data-select2-selector="tzone">
                                    <option data-tzone="feather-moon">(GMT -12:00) Eniwetok, Kwajalein</option>
                                    <option data-tzone="feather-moon">(GMT -11:00) Midway Island, Samoa</option>
                                    <option data-tzone="feather-moon">(GMT -10:00) Hawaii</option>
                                    <option data-tzone="feather-moon">(GMT -9:30) Taiohae</option>
                                    <option data-tzone="feather-moon">(GMT -9:00) Alaska</option>
                                    <option data-tzone="feather-moon">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
                                    <option data-tzone="feather-moon">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
                                    <option data-tzone="feather-moon">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
                                    <option data-tzone="feather-moon">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
                                    <option data-tzone="feather-moon">(GMT -4:30) Caracas</option>
                                    <option data-tzone="feather-moon">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
                                    <option data-tzone="feather-moon">(GMT -3:30) Newfoundland</option>
                                    <option data-tzone="feather-moon">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
                                    <option data-tzone="feather-moon">(GMT -2:00) Mid-Atlantic</option>
                                    <option data-tzone="feather-moon">(GMT -1:00) Azores, Cape Verde Islands</option>
                                    <option data-tzone="feather-sunrise" selected>(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
                                    <option data-tzone="feather-sun">(GMT +1:00) Brussels, Copenhagen, Madrid, Paris</option>
                                    <option data-tzone="feather-sun">(GMT +2:00) Kaliningrad, South Africa</option>
                                    <option data-tzone="feather-sun">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
                                    <option data-tzone="feather-sun">(GMT +3:30) Tehran</option>
                                    <option data-tzone="feather-sun">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
                                    <option data-tzone="feather-sun">(GMT +4:30) Kabul</option>
                                    <option data-tzone="feather-sun">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
                                    <option data-tzone="feather-sun">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
                                    <option data-tzone="feather-sun">(GMT +5:45) Kathmandu, Pokhara</option>
                                    <option data-tzone="feather-sun">(GMT +6:00) Almaty, Dhaka, Colombo</option>
                                    <option data-tzone="feather-sun">(GMT +6:30) Yangon, Mandalay</option>
                                    <option data-tzone="feather-sun">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
                                    <option data-tzone="feather-sun">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
                                    <option data-tzone="feather-sun">(GMT +8:45) Eucla</option>
                                    <option data-tzone="feather-sun">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
                                    <option data-tzone="feather-sun">(GMT +9:30) Adelaide, Darwin</option>
                                    <option data-tzone="feather-sun">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
                                    <option data-tzone="feather-sun">(GMT +10:30) Lord Howe Island</option>
                                    <option data-tzone="feather-sun">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
                                    <option data-tzone="feather-sun">(GMT +11:30) Norfolk Island</option>
                                    <option data-tzone="feather-sun">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
                                    <option data-tzone="feather-sun">(GMT +12:45) Chatham Islands</option>
                                    <option data-tzone="feather-sun">(GMT +13:00) Apia, Nukualofa</option>
                                    <option data-tzone="feather-sun">(GMT +14:00) Line Islands, Tokelau</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4 align-items-center">
                            <div class="col-lg-4">
                                <label class="fw-semibold">Languages: </label>
                            </div>
                            <div class="col-lg-8">
                                <select class="form-control" data-select2-selector="language" multiple>
                                    <option data-language="bg-primary">Afrikaans</option>
                                    <option data-language="bg-warning">Albanian - shqip</option>
                                    <option data-language="bg-cyan">Amharic - አማርኛ</option>
                                    <option data-language="bg-green">Arabic - العربية</option>
                                    <option data-language="bg-black">Aragonese - aragonés</option>
                                    <option data-language="bg-teal">Armenian - հայերեն</option>
                                    <option data-language="bg-success">Asturian - asturianu</option>
                                    <option data-language="bg-cyan">Azerbaijani - azərbaycan dili</option>
                                    <option data-language="bg-indigo">Basque - euskara</option>
                                    <option data-language="bg-teal">Belarusian - беларуская</option>
                                    <option data-language="bg-black">Bengali - বাংলা</option>
                                    <option data-language="bg-green">Bosnian - bosanski</option>
                                    <option data-language="bg-primary">Breton - brezhoneg</option>
                                    <option data-language="bg-warning">Bulgarian - български</option>
                                    <option data-language="bg-teal">Catalan - català</option>
                                    <option data-language="bg-black">Central Kurdish - کوردی (دەستنوسی عەرەبی)</option>
                                    <option data-language="bg-green">Chinese - 中文</option>
                                    <option data-language="bg-cyan">Chinese (Hong Kong) - 中文（香港）</option>
                                    <option data-language="bg-primary">Chinese (Simplified) - 中文（简体）</option>
                                    <option data-language="bg-danger">Chinese (Traditional) - 中文（繁體）</option>
                                    <option data-language="bg-cyan">Corsican</option>
                                    <option data-language="bg-black">Croatian - hrvatski</option>
                                    <option data-language="bg-warning">Czech - čeština</option>
                                    <option data-language="bg-primary">Danish - dansk</option>
                                    <option data-language="bg-teal">Dutch - Nederlands</option>
                                    <option data-language="bg-danger" selected>English</option>
                                    <option data-language="bg-green">English (Australia)</option>
                                    <option data-language="bg-black">English (Canada)</option>
                                    <option data-language="bg-cyan">English (India)</option>
                                    <option data-language="bg-primary">English (New Zealand)</option>
                                    <option data-language="bg-indigo">English (South Africa)</option>
                                    <option data-language="bg-black">English (United Kingdom)</option>
                                    <option data-language="bg-teal">English (United States)</option>
                                    <option data-language="bg-green">Esperanto - esperanto</option>
                                    <option data-language="bg-cyan">Estonian - eesti</option>
                                    <option data-language="bg-primary">Faroese - føroyskt</option>
                                    <option data-language="bg-black">Filipino</option>
                                    <option data-language="bg-cyan">Finnish - suomi</option>
                                    <option data-language="bg-primary">French - français</option>
                                    <option data-language="bg-success">French (Canada) - français (Canada)</option>
                                    <option data-language="bg-warning">French (France) - français (France)</option>
                                    <option data-language="bg-black">French (Switzerland) - français (Suisse)</option>
                                    <option data-language="bg-primary">Galician - galego</option>
                                    <option data-language="bg-teal">Georgian - ქართული</option>
                                    <option data-language="bg-black">German - Deutsch</option>
                                    <option data-language="bg-green">German (Austria) - Deutsch (Österreich)</option>
                                    <option data-language="bg-danger">German (Germany) - Deutsch (Deutschland)</option>
                                    <option data-language="bg-indigo">German (Liechtenstein) - Deutsch (Liechtenstein)</option>
                                    <option data-language="bg-cyan">German (Switzerland) - Deutsch (Schweiz)</option>
                                    <option data-language="bg-primary">Greek - Ελληνικά</option>
                                    <option data-language="bg-green">Guarani</option>
                                    <option data-language="bg-teal">Gujarati - ગુજરાતી</option>
                                    <option data-language="bg-success">Hausa</option>
                                    <option data-language="bg-primary">Hawaiian - ʻŌlelo Hawaiʻi</option>
                                    <option data-language="bg-cyan">Hebrew - עברית</option>
                                    <option data-language="bg-warning">Hindi - हिन्दी</option>
                                    <option data-language="bg-green">Hungarian - magyar</option>
                                    <option data-language="bg-black">Icelandic - íslenska</option>
                                    <option data-language="bg-danger">Indonesian - Indonesia</option>
                                    <option data-language="bg-primary">Interlingua</option>
                                    <option data-language="bg-green">Irish - Gaeilge</option>
                                    <option data-language="bg-success">Italian - italiano</option>
                                    <option data-language="bg-cyan">Italian (Italy) - italiano (Italia)</option>
                                    <option data-language="bg-teal">Italian (Switzerland) - italiano (Svizzera)</option>
                                    <option data-language="bg-indigo">Japanese - 日本語</option>
                                    <option data-language="bg-primary">Kannada - ಕನ್ನಡ</option>
                                    <option data-language="bg-cyan">Kazakh - қазақ тілі</option>
                                    <option data-language="bg-black">Khmer - ខ្មែរ</option>
                                    <option data-language="bg-primary">Korean - 한국어</option>
                                    <option data-language="bg-warning">Kurdish - Kurdî</option>
                                    <option data-language="bg-cyan">Kyrgyz - кыргызча</option>
                                    <option data-language="bg-danger">Lao - ລາວ</option>
                                    <option data-language="bg-primary">Latin</option>
                                    <option data-language="bg-orange">Latvian - latviešu</option>
                                    <option data-language="bg-green">Lingala - lingála</option>
                                    <option data-language="bg-black">Lithuanian - lietuvių</option>
                                    <option data-language="bg-primary">Macedonian - македонски</option>
                                    <option data-language="bg-indigo">Malay - Bahasa Melayu</option>
                                    <option data-language="bg-green">Malayalam - മലയാളം</option>
                                    <option data-language="bg-cyan">Maltese - Malti</option>
                                    <option data-language="bg-teal">Marathi - मराठी</option>
                                    <option data-language="bg-primary">Mongolian - монгол</option>
                                    <option data-language="bg-danger">Nepali - नेपाली</option>
                                    <option data-language="bg-green">Norwegian - norsk</option>
                                    <option data-language="bg-warning">Norwegian Bokmål - norsk bokmål</option>
                                    <option data-language="bg-primary">Norwegian Nynorsk - nynorsk</option>
                                    <option data-language="bg-success">Occitan</option>
                                    <option data-language="bg-cyan">Oriya - ଓଡ଼ିଆ</option>
                                    <option data-language="bg-black">Oromo - Oromoo</option>
                                    <option data-language="bg-danger">Pashto - پښتو</option>
                                    <option data-language="bg-green">Persian - فارسی</option>
                                    <option data-language="bg-primary">Polish - polski</option>
                                    <option data-language="bg-teal">Portuguese - português</option>
                                    <option data-language="bg-danger">Portuguese (Brazil) - português (Brasil)</option>
                                    <option data-language="bg-black">Portuguese (Portugal) - português (Portugal)</option>
                                    <option data-language="bg-green">Punjabi - ਪੰਜਾਬੀ</option>
                                    <option data-language="bg-indigo">Quechua</option>
                                    <option data-language="bg-success">Romanian - română</option>
                                    <option data-language="bg-warning">Romanian (Moldova) - română (Moldova)</option>
                                    <option data-language="bg-primary">Romansh - rumantsch</option>
                                    <option data-language="bg-danger">Russian - русский</option>
                                    <option data-language="bg-green">Scottish Gaelic</option>
                                    <option data-language="bg-orange">Serbian - српски</option>
                                    <option data-language="bg-teal">Serbo - Croatian</option>
                                    <option data-language="bg-primary">Shona - chiShona</option>
                                    <option data-language="bg-cyan">Sindhi</option>
                                    <option data-language="bg-black">Sinhala - සිංහල</option>
                                    <option data-language="bg-warning">Slovak - slovenčina</option>
                                    <option data-language="bg-danger">Slovenian - slovenščina</option>
                                    <option data-language="bg-green">Somali - Soomaali</option>
                                    <option data-language="bg-primary">Southern Sotho</option>
                                    <option data-language="bg-orange">Spanish - español</option>
                                    <option data-language="bg-indigo">Spanish (Argentina) - español (Argentina)</option>
                                    <option data-language="bg-green">Spanish (Latin America) - español (Latinoamérica)</option>
                                    <option data-language="bg-cyan">Spanish (Mexico) - español (México)</option>
                                    <option data-language="bg-black">Spanish (Spain) - español (España)</option>
                                    <option data-language="bg-success">Spanish (United States) - español (Estados Unidos)</option>
                                    <option data-language="bg-primary">Sundanese</option>
                                    <option data-language="bg-teal">Swahili - Kiswahili</option>
                                    <option data-language="bg-green">Swedish - svenska</option>
                                    <option data-language="bg-cyan">Tajik - тоҷикӣ</option>
                                    <option data-language="bg-warning">Tamil - தமிழ்</option>
                                    <option data-language="bg-primary">Tatar</option>
                                    <option data-language="bg-success">Telugu - తెలుగు</option>
                                    <option data-language="bg-black">Thai - ไทย</option>
                                    <option data-language="bg-green">Tigrinya - ትግርኛ</option>
                                    <option data-language="bg-teal">Tongan - lea fakatonga</option>
                                    <option data-language="bg-primary">Turkish - Türkçe</option>
                                    <option data-language="bg-danger">Turkmen</option>
                                    <option data-language="bg-indigo">Twi</option>
                                    <option data-language="bg-black">Ukrainian - українська</option>
                                    <option data-language="bg-green">Urdu - اردو</option>
                                    <option data-language="bg-cyan">Uyghur</option>
                                    <option data-language="bg-primary">Uzbek - o‘zbek</option>
                                    <option data-language="bg-success">Vietnamese - Tiếng Việt</option>
                                    <option data-language="bg-cyan">Walloon - wa</option>
                                    <option data-language="bg-primary">Welsh - Cymraeg</option>
                                    <option data-language="bg-teal">Western Frisian</option>
                                    <option data-language="bg-warning">Xhosa</option>
                                    <option data-language="bg-indigo">Yiddish</option>
                                    <option data-language="bg-green">Yoruba - Èdè Yorùbá</option>
                                    <option data-language="bg-black">Zulu - isiZulu</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4 align-items-center">
                            <div class="col-lg-4">
                                <label class="fw-semibold">Currency: </label>
                            </div>
                            <div class="col-lg-8">
                                <select class="form-control" data-select2-selector="currency">
                                    <option data-currency="af">AFN - Afghan Afghani - ؋</option>
                                    <option data-currency="al">ALL - Albanian Lek - Lek</option>
                                    <option data-currency="dz">DZD - Algerian Dinar - دج</option>
                                    <option data-currency="ao">AOA - Angolan Kwanza - Kz</option>
                                    <option data-currency="ar">ARS - Argentine Peso - $</option>
                                    <option data-currency="am">AMD - Armenian Dram - ֏</option>
                                    <option data-currency="aw">AWG - Aruban Florin - ƒ</option>
                                    <option data-currency="au">AUD - Australian Dollar - $</option>
                                    <option data-currency="az">AZN - Azerbaijani Manat - m</option>
                                    <option data-currency="bs">BSD - Bahamian Dollar - B$</option>
                                    <option data-currency="bh">BHD - Bahraini Dinar - .د.ب</option>
                                    <option data-currency="bd">BDT - Bangladeshi Taka - ৳</option>
                                    <option data-currency="bb">BBD - Barbadian Dollar - Bds$</option>
                                    <option data-currency="by">BYR - Belarusian Ruble - Br</option>
                                    <option data-currency="be">BEF - Belgian Franc - fr</option>
                                    <option data-currency="bz">BZD - Belize Dollar - $</option>
                                    <option data-currency="bm">BMD - Bermudan Dollar - $</option>
                                    <option data-currency="bt">BTN - Bhutanese Ngultrum - Nu.</option>
                                    <option data-currency="bt">BTC - Bitcoin - ฿</option>
                                    <option data-currency="bo">BOB - Bolivian Boliviano - Bs.</option>
                                    <option data-currency="ba">BAM - Bosnia-Herzegovina Convertible Mark - KM</option>
                                    <option data-currency="bw">BWP - Botswanan Pula - P</option>
                                    <option data-currency="br">BRL - Brazilian Real - R$</option>
                                    <option data-currency="gb">GBP - British Pound Sterling - £</option>
                                    <option data-currency="bn">BND - Brunei Dollar - B$</option>
                                    <option data-currency="bg">BGN - Bulgarian Lev - Лв.</option>
                                    <option data-currency="bi">BIF - Burundian Franc - FBu</option>
                                    <option data-currency="kh">KHR - Cambodian Riel - KHR</option>
                                    <option data-currency="ca">CAD - Canadian Dollar - $</option>
                                    <option data-currency="cv">CVE - Cape Verdean Escudo - $</option>
                                    <option data-currency="ky">KYD - Cayman Islands Dollar - $</option>
                                    <option data-currency="fr">XOF - CFA Franc BCEAO - CFA</option>
                                    <option data-currency="fr">XAF - CFA Franc BEAC - FCFA</option>
                                    <option data-currency="fr">XPF - CFP Franc - ₣</option>
                                    <option data-currency="cl">CLP - Chilean Peso - $</option>
                                    <option data-currency="cn">CNY - Chinese Yuan - ¥</option>
                                    <option data-currency="co">COP - Colombian Peso - $</option>
                                    <option data-currency="km">KMF - Comorian Franc - CF</option>
                                    <option data-currency="cd">CDF - Congolese Franc - FC</option>
                                    <option data-currency="cr">CRC - Costa Rican ColÃ³n - ₡</option>
                                    <option data-currency="hr">HRK - Croatian Kuna - kn</option>
                                    <option data-currency="cu">CUC - Cuban Convertible Peso - $, CUC</option>
                                    <option data-currency="cz">CZK - Czech Republic Koruna - Kč</option>
                                    <option data-currency="dk">DKK - Danish Krone - Kr.</option>
                                    <option data-currency="dj">DJF - Djiboutian Franc - Fdj</option>
                                    <option data-currency="do">DOP - Dominican Peso - $</option>
                                    <option data-currency="bq">XCD - East Caribbean Dollar - $</option>
                                    <option data-currency="eg">EGP - Egyptian Pound - ج.م</option>
                                    <option data-currency="er">ERN - Eritrean Nakfa - Nfk</option>
                                    <option data-currency="ee">EEK - Estonian Kroon - kr</option>
                                    <option data-currency="et">ETB - Ethiopian Birr - Nkf</option>
                                    <option data-currency="eu">EUR - Euro - €</option>
                                    <option data-currency="fk">FKP - Falkland Islands Pound - £</option>
                                    <option data-currency="fj">FJD - Fijian Dollar - FJ$</option>
                                    <option data-currency="gm">GMD - Gambian Dalasi - D</option>
                                    <option data-currency="ge">GEL - Georgian Lari - ლ</option>
                                    <option data-currency="de">DEM - German Mark - DM</option>
                                    <option data-currency="gh">GHS - Ghanaian Cedi - GH₵</option>
                                    <option data-currency="gi">GIP - Gibraltar Pound - £</option>
                                    <option data-currency="gr">GRD - Greek Drachma - ₯, Δρχ, Δρ</option>
                                    <option data-currency="gt">GTQ - Guatemalan Quetzal - Q</option>
                                    <option data-currency="gn">GNF - Guinean Franc - FG</option>
                                    <option data-currency="gy">GYD - Guyanaese Dollar - $</option>
                                    <option data-currency="ht">HTG - Haitian Gourde - G</option>
                                    <option data-currency="hn">HNL - Honduran Lempira - L</option>
                                    <option data-currency="hk">HKD - Hong Kong Dollar - $</option>
                                    <option data-currency="hu">HUF - Hungarian Forint - Ft</option>
                                    <option data-currency="is">ISK - Icelandic KrÃ³na - kr</option>
                                    <option data-currency="in">INR - Indian Rupee - ₹</option>
                                    <option data-currency="id">IDR - Indonesian Rupiah - Rp</option>
                                    <option data-currency="ir">IRR - Iranian Rial - ﷼</option>
                                    <option data-currency="iq">IQD - Iraqi Dinar - د.ع</option>
                                    <option data-currency="il">ILS - Israeli New Sheqel - ₪</option>
                                    <option data-currency="it">ITL - Italian Lira - L,£</option>
                                    <option data-currency="jm">JMD - Jamaican Dollar - J$</option>
                                    <option data-currency="jp">JPY - Japanese Yen - ¥</option>
                                    <option data-currency="jo">JOD - Jordanian Dinar - ا.د</option>
                                    <option data-currency="kz">KZT - Kazakhstani Tenge - лв</option>
                                    <option data-currency="ke">KES - Kenyan Shilling - KSh</option>
                                    <option data-currency="kw">KWD - Kuwaiti Dinar - ك.د</option>
                                    <option data-currency="kg">KGS - Kyrgystani Som - лв</option>
                                    <option data-currency="la">LAK - Laotian Kip - ₭</option>
                                    <option data-currency="lv">LVL - Latvian Lats - Ls</option>
                                    <option data-currency="lb">LBP - Lebanese Pound - £</option>
                                    <option data-currency="ls">LSL - Lesotho Loti - L</option>
                                    <option data-currency="lr">LRD - Liberian Dollar - $</option>
                                    <option data-currency="ly">LYD - Libyan Dinar - د.ل</option>
                                    <option data-currency="lt">LTL - Lithuanian Litas - Lt</option>
                                    <option data-currency="mo">MOP - Macanese Pataca - $</option>
                                    <option data-currency="mk">MKD - Macedonian Denar - ден</option>
                                    <option data-currency="mg">MGA - Malagasy Ariary - Ar</option>
                                    <option data-currency="mw">MWK - Malawian Kwacha - MK</option>
                                    <option data-currency="my">MYR - Malaysian Ringgit - RM</option>
                                    <option data-currency="mv">MVR - Maldivian Rufiyaa - Rf</option>
                                    <option data-currency="mr">MRO - Mauritanian Ouguiya - MRU</option>
                                    <option data-currency="mu">MUR - Mauritian Rupee - ₨</option>
                                    <option data-currency="mx">MXN - Mexican Peso - $</option>
                                    <option data-currency="md">MDL - Moldovan Leu - L</option>
                                    <option data-currency="mn">MNT - Mongolian Tugrik - ₮</option>
                                    <option data-currency="ma">MAD - Moroccan Dirham - MAD</option>
                                    <option data-currency="mz">MZM - Mozambican Metical - MT</option>
                                    <option data-currency="mm">MMK - Myanmar Kyat - K</option>
                                    <option data-currency="na">NAD - Namibian Dollar - $</option>
                                    <option data-currency="np">NPR - Nepalese Rupee - ₨</option>
                                    <option data-currency="nl">ANG - Netherlands Antillean Guilder - ƒ</option>
                                    <option data-currency="tw">TWD - New Taiwan Dollar - $</option>
                                    <option data-currency="nz">NZD - New Zealand Dollar - $</option>
                                    <option data-currency="ni">NIO - Nicaraguan CÃ³rdoba - C$</option>
                                    <option data-currency="ng">NGN - Nigerian Naira - ₦</option>
                                    <option data-currency="kp">KPW - North Korean Won - ₩</option>
                                    <option data-currency="no">NOK - Norwegian Krone - kr</option>
                                    <option data-currency="om">OMR - Omani Rial - .ع.ر</option>
                                    <option data-currency="pk">PKR - Pakistani Rupee - ₨</option>
                                    <option data-currency="pa">PAB - Panamanian Balboa - B/.</option>
                                    <option data-currency="pg">PGK - Papua New Guinean Kina - K</option>
                                    <option data-currency="py">PYG - Paraguayan Guarani - ₲</option>
                                    <option data-currency="pe">PEN - Peruvian Nuevo Sol - S/.</option>
                                    <option data-currency="ph">PHP - Philippine Peso - ₱</option>
                                    <option data-currency="pl">PLN - Polish Zloty - zł</option>
                                    <option data-currency="qa">QAR - Qatari Rial - ق.ر</option>
                                    <option data-currency="ro">RON - Romanian Leu - lei</option>
                                    <option data-currency="ru">RUB - Russian Ruble - ₽</option>
                                    <option data-currency="rw">RWF - Rwandan Franc - FRw</option>
                                    <option data-currency="sv">SVC - Salvadoran ColÃ³n - ₡</option>
                                    <option data-currency="ws">WST - Samoan Tala - SAT</option>
                                    <option data-currency="sa">SAR - Saudi Riyal - ﷼</option>
                                    <option data-currency="sr">RSD - Serbian Dinar - din</option>
                                    <option data-currency="sc">SCR - Seychellois Rupee - SRe</option>
                                    <option data-currency="sl">SLL - Sierra Leonean Leone - Le</option>
                                    <option data-currency="sg">SGD - Singapore Dollar - $</option>
                                    <option data-currency="sk">SKK - Slovak Koruna - Sk</option>
                                    <option data-currency="sb">SBD - Solomon Islands Dollar - Si$</option>
                                    <option data-currency="so">SOS - Somali Shilling - Sh.so.</option>
                                    <option data-currency="za">ZAR - South African Rand - R</option>
                                    <option data-currency="kr">KRW - South Korean Won - ₩</option>
                                    <option data-currency="lk">LKR - Sri Lankan Rupee - Rs</option>
                                    <option data-currency="sh">SHP - St. Helena Pound - £</option>
                                    <option data-currency="sd">SDG - Sudanese Pound - .س.ج</option>
                                    <option data-currency="sr">SRD - Surinamese Dollar - $</option>
                                    <option data-currency="sz">SZL - Swazi Lilangeni - E</option>
                                    <option data-currency="se">SEK - Swedish Krona - kr</option>
                                    <option data-currency="ch">CHF - Swiss Franc - CHf</option>
                                    <option data-currency="sy">SYP - Syrian Pound - LS</option>
                                    <option data-currency="st">STD - São Tomé and Príncipe Dobra - Db</option>
                                    <option data-currency="tj">TJS - Tajikistani Somoni - SM</option>
                                    <option data-currency="tz">TZS - Tanzanian Shilling - TSh</option>
                                    <option data-currency="th">THB - Thai Baht - ฿</option>
                                    <option data-currency="to">TOP - Tongan pa'anga - $</option>
                                    <option data-currency="tt">TTD - Trinidad & Tobago Dollar - $</option>
                                    <option data-currency="tn">TND - Tunisian Dinar - ت.د</option>
                                    <option data-currency="tr">TRY - Turkish Lira - ₺</option>
                                    <option data-currency="tm">TMT - Turkmenistani Manat - T</option>
                                    <option data-currency="ug">UGX - Ugandan Shilling - USh</option>
                                    <option data-currency="ua">UAH - Ukrainian Hryvnia - ₴</option>
                                    <option data-currency="ae">AED - United Arab Emirates Dirham - إ.د</option>
                                    <option data-currency="uy">UYU - Uruguayan Peso - $</option>
                                    <option data-currency="us" selected>USD - US Dollar - $</option>
                                    <option data-currency="uz">UZS - Uzbekistan Som - лв</option>
                                    <option data-currency="vu">VUV - Vanuatu Vatu - VT</option>
                                    <option data-currency="ve">VEF - Venezuelan BolÃ­var - Bs</option>
                                    <option data-currency="vn">VND - Vietnamese Dong - ₫</option>
                                    <option data-currency="ye">YER - Yemeni Rial - ﷼</option>
                                    <option data-currency="zm">ZMK - Zambian Kwacha - ZK</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>
@endsection