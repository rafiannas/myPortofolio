<?php
// Koneksi ke database
$servername = "127.0.0.1";  // jika PHP dan MySQL satu server
$username = "rafii";
$password = "Ja#io2dF38rP";
$database = "mydb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

$tanggal = date("Y-m-d");
$waktu = date("H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];

$stmt = $conn->prepare("INSERT INTO pengunjung (tanggal, waktu, ip_address, user_agent) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $tanggal, $waktu, $ip, $user_agent);
$stmt->execute();

$stmt->close();
$conn->close();
?>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Rafi Annas - Resume</title>
      
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">Rafi Annas</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                            <li class="nav-item"><a class="nav-link active" href="resume.php">Resume</a></li>
                            <li class="nav-item"><a class="nav-link" href="projects.html">Projects</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page Content-->
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Experience Section-->
                        <section>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                            </div>
                            <!-- Experience Card TA -->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-5 rounded-4">
                                                <div class="text-primary fw-bolder mb-2">Mar 2025 - Present</div>
                                                <div class="small fw-bolder">Pemerintah Provinsi DKI Jakarta </div>
                                                <div class="small text-muted">Tenaga Ahli IT QA</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div><b>Project Quality Partner</b></div>
                                            <div>Automation Test in MochaJS</div>
                                            <div>Load Test in K6 and JMeter</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <!-- Experience Card AGIT -->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-5 rounded-4">
                                                <div class="text-primary fw-bolder mb-2">Sep 2023 - Mar 2025</div>
                                                <div class="small fw-bolder">Astra Graphia Information Technology </div>
                                                <div class="small text-muted">QC Automation Engineer</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div><b>Asuransi Astra Buana Client</b></div>
                                            <div>Automation Test in MochaJS</div>
                                            <div>Load Test in JMeter</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Experience Card METANESIA -->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-5 rounded-4">
                                                <div class="text-primary fw-bolder mb-2">Feb 2023 - Aug 2023</div>
                                                <div class="small fw-bolder">Metanesia</div>
                                                <div class="small text-muted">QA Engineer</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div><b>Metaverse platform by Telkom Indonesia</b></div>
                                            <div>Load Test in Loader io and JMeter</div>
                                            <div>UI Test in Katalon</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Experience Card E2PAY -->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-5 rounded-4">
                                                <div class="text-primary fw-bolder mb-2">Mei 2022 - Mei 2023</div>
                                                <div class="small fw-bolder">E2PAY GLOBAL UTAMA</div>
                                                <div class="small text-muted">QA Engineer</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div><b>In Payment and Biller Gateway</b></div>
                                            <div>Management Test Case in ZepryScale</div>
                                            <div>Load Test in JMeter</div>
                                            <div>UI Test in Katalon</div>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <!-- Experience Card OTTO DIGITAL-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-5 rounded-4">
                                                <div class="text-primary fw-bolder mb-2">Feb 2022 - Mei 2022</div>
                                                <div class="small fw-bolder">Otto Digital</div>
                                                <div class="small text-muted">Software QA</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div><b>Support Software in Salim Group</b></div>
                                            <div>Management Test Case in TestRail</div>
                                            <div>API Test in Postman</div>
                                            <div>UI Test in Katalon</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Experience Card PLN-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-5 rounded-4">
                                                <div class="text-primary fw-bolder mb-2">Des 2020 - Aug 2021</div>
                                                <div class="small fw-bolder">PT PLN (Persero)</div>
                                                <div class="small text-muted">Software Engineer</div>
                                                <div class="small text-muted">Internship</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div><b>PMMB FHCI Progtam - PLN PUSDIKLAT</b></div>
                                            <div>Cleaning and Transforming Data with SQL</div>
                                            <div>Building mini tools with CodeIgniter 3</div>
                                            <div>Web UI testing in Katalon</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Education Section-->
                        <section>
                            <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                            <!-- Education Card Bangkit-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-5 rounded-4">
                                                <div class="text-secondary fw-bolder mb-2">Feb 2021 - Aug 2021</div>
                                                <div class="mb-2">
                                                    <div class="small fw-bolder">Google Bangkit</div>
                                                    <div class="small text-muted">Kampus Merdeka</div>
                                                </div>
                                                <div class="fst-italic">
                                                    <div class="small text-muted">Mobile  Development</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7"><div> Once of program offered as an approved Kampus Merdeka program supported by the Ministry of Education and Culture of the Republic of Indonesia.</div></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Education Card UAI-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-5 rounded-4">
                                                <div class="text-secondary fw-bolder mb-2">Sep 2017 - Jan 2022</div>
                                                <div class="mb-2">
                                                    <div class="small fw-bolder">Al Azhar University of Indonesia</div>
                                                    <div class="small text-muted">Informatics</div>
                                                </div>
                                                <div class="fst-italic">
                                                    <div class="small text-muted">GPA 3.6 of 4.0</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7"><div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed aliquam non voluptate corrupti excepturi maxime porro fuga.</div></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Divider-->
                        <div class="pb-5"></div>
                        <!-- Skills Section-->
                        <section>
                            <!-- Skillset Card-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <!-- Professional skills list-->
                                    <div class="mb-5">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Professional Skills</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Katalon</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">JMeter</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">K6</div></div>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">MochaJS</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Selenium
                                            </div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Playwright</div></div>
                                        </div>
                                    </div>
                                    <!-- Languages list-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Indonesaia</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">English</div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Rafi &copy; 2025</div></div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
