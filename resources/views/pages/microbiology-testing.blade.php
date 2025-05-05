@extends('layout')
@section('title', 'ICH Stability Studies')
        @section('content')

        <!-- Title Bar -->
        <div class="pbmit-title-bar-wrapper">
            <div class="container">
                <div class="pbmit-title-bar-content">
                    <div class="pbmit-title-bar-content-inner">
                        <div class="pbmit-tbar">
                            <div class="pbmit-tbar-inner container">
                                <h1 class="pbmit-tbar-title"> Microbiology Testing</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">

                                <span>
                                    <a title="" href="#" class="home"><span>Home</span></a>
                                </span>
                                <span class="sep">
                                    <i class="pbmit-base-icon-angle-right"></i>
                                </span>
                                <span>
                                    <a title="" href="#" class="home"><span>Microbiology Testing</span></a>
                                </span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Title Bar End-->

        <!-- Page Content -->
        <div class="page-content" id="page">

            <!-- Service Details -->
            <section class="site-content service-details">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xl-9 service-left-col">

                            <div class="pbmit-entry-content">
                                <div class="pbmit-service_content">
                                    <div class="pbmit-heading animation-style2">
                                        <h3 class="pbmit-title mb-3">Microbiology Testing</h3>
                                    </div>
                                    <p class="pbmit-firstletter">
                                        Our dedicated microbiology laboratory is on standby to provide qualitative and
                                        quantitative assessments of non-sterile raw materials and finished products
                                        using USP, FDA/BAM, and in-house methods.
                                    </p>
                                    <p>With over 80 years of experience in this space, we help our clients determine the
                                        tests that best fit their needs, and support their products’ compliance with
                                        relevant regulatory requirements.</p>

                                    <div class="pbmit-heading animation-style2">
                                        <h3 class="pbmit-title mb-3">What kind of testing do we provide?</h3>
                                    </div>
                                    <p>We provide testing for microbial enumeration, presence and absence of specified
                                        organisms, as well as detection for bacterial endotoxins (see below).</p>

                                    <div class="pbmit-heading animation-style2">
                                        <h3 class="pbmit-title mb-3">What is the test for specified organisms?</h3>
                                    </div>
                                    <p>This test determines the presence and/or absence of specific organisms under
                                        aerobic or anaerobic conditions.</p>

                                    <div class="my-5">
                                        <div class="row align-items-center">
                                            <div class="col-md-12 col-xl-6">
                                                <div class="service-single-img-02" style="background-image: url({{ asset('images/bio.webp') }});
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    border-radius: 30px;
    padding: 180px 0;"></div>
                                            </div>
                                            <div class="col-md-12 col-xl-6">
                                                <div class="ps-xl-2">


                                                    <div class="pbmit-heading">
                                                        <h3 class="pbmit-title">What types of microbial enumeration and
                                                            tests for specified organisms do we perform?</h3>
                                                    </div>
                                                    <p class="pbmit-text">The types of microbial pathogens we are able
                                                        to identify for samples are listed below. The USP chapter listed
                                                        contains the regulations we follow in our testing should you
                                                        need your testing validated.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="my-5">
                                        <div class="row align-items-center">
                                            <div class="col-md-12 col-xl-6">
                                                <div>
                                                    <h3>Pharmaceutical industry</h3>
                                                    <table class="table table-hover table-striped my-3">
                                                        <tbody>
                                                            <tr>
                                                                <td>USP Chapter</td>
                                                                <td>Test</td>
                                                            </tr>
                                                            <tr>
                                                                <td>&lt;61&gt;&lt;62&gt;</td>
                                                                <td>Suitability Testing • Suitability of the Counting
                                                                    Methods in the Presence of Product. • Suitability of
                                                                    the Test Methods in the Presence of Product.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>&lt;51&gt;</td>
                                                                <td>Antimicrobial Effectiveness Testing</td>
                                                            </tr>
                                                            <tr>
                                                                <td>&lt;60&gt;</td>
                                                                <td>Burkholderia cepacia complex (Bcc)</td>
                                                            </tr>
                                                            <tr>
                                                                <td>&lt;61&gt;</td>
                                                                <td>Microbial Enumeration Testing • Total Aerobic
                                                                    Microbial Count • Total Yeasts and Molds Count</td>
                                                            </tr>
                                                            <tr>
                                                                <td>&lt;62&gt;</td>
                                                                <td>Bile Tolerant Gram Negative Bacteria</td>
                                                            </tr>
                                                            <tr>
                                                                <td>&lt;62&gt;</td>
                                                                <td>Escherichia coli (E.coli)</td>
                                                            </tr>
                                                            <tr>
                                                                <td>&lt;62&gt;</td>
                                                                <td>Salmonella</td>
                                                            </tr>
                                                            <tr>
                                                                <td>&lt;62&gt;</td>
                                                                <td>Pseudomonas aeruginosa Staphylococcus aureus</td>
                                                            </tr>
                                                            <tr>
                                                                <td>&lt;62&gt;</td>
                                                                <td>Clostridia</td>
                                                            </tr>
                                                            <tr>
                                                                <td>&lt;62&gt;</td>
                                                                <td>Candida albicans</td>
                                                            </tr>
                                                            <tr>
                                                                <td>&lt;71&gt;</td>
                                                                <td>Sterility</td>
                                                            </tr>
                                                            <tr>
                                                                <td>&lt;85&gt;</td>
                                                                <td>Endotoxins</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>


                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xl-6">
                                                <div class="ps-xl-2">


                                                    <h3>The Nutraceutical and other industries</h3>

                                                    <table class="table table-hover table-striped">
                                                        <tbody>
                                                            <tr>
                                                                <td>USP Chapter</td>
                                                                <td>Test</td>
                                                            </tr>
                                                            <tr>
                                                                <td>&lt;2021&gt;&lt;2022&gt;</td>
                                                                <td>Preparatory Testing</td>
                                                            </tr>
                                                            <tr>
                                                                <td>&lt;2021&gt;</td>
                                                                <td>Microbial Enumeration Testing • Total Aerobic
                                                                    Microbial Count • Total Yeasts and Molds Count</td>
                                                            </tr>
                                                            <tr>
                                                                <td>&lt;2021&gt;</td>
                                                                <td>Bile Tolerant Gram Negative Bacteria</td>
                                                            </tr>
                                                            <tr>
                                                                <td>&lt;2022&gt;</td>
                                                                <td>Escherichia coli (E.coli)</td>
                                                            </tr>
                                                            <tr>
                                                                <td>&lt;2022&gt;</td>
                                                                <td>Salmonella</td>
                                                            </tr>
                                                            <tr>
                                                                <td>&lt;2022&gt;</td>
                                                                <td>Staphylococcus aureus</td>
                                                            </tr>
                                                            <tr>
                                                                <td>&lt;2022&gt;</td>
                                                                <td>Clostridia</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <h3>In addition to USP methods, we offer the following
                                                        microbiological testing:</h3>
                                                    <table class="table table-hover table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Testing Method</th>
                                                                <th>Test</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>FDA/ BAM and SM9221D</td>
                                                                <td>Total and Fecal Coliforms</td>
                                                            </tr>
                                                            <tr>
                                                                <td>SM9215B</td>
                                                                <td>Heterotrophic Plate Count on Process Water</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>


                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="my-5">
                                        <div class="row align-items-center">
                                            <div class="col-md-12 col-xl-6">
                                                <div class="service-single-img-02" style="background-image: url({{ asset('images/erZWzhVrp0QeNSs9ZnczqSCepdZGrFlumcaLl2ptvpDrbRA7JdmaQOX31wdRmDKdYAiViQuGFCIrYBvM_1614236844.jpg') }});
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    border-radius: 30px;
    padding: 180px 0;"></div>
                                            </div>
                                            <div class="col-md-12 col-xl-6">
                                                <div class="ps-xl-2">


                                                    <div class="pbmit-heading">
                                                        <h3 class="pbmit-title">What methods do you follow?</h3>
                                                    </div>
                                                    <p class="pbmit-text">We follow follow USP <61> and <62> for
                                                                pharmaceutical samples, and USP <2021> and <2022> for
                                                                        dietary supplements. Additionally, we have
                                                                        in-house methods for cosmetics samples, water
                                                                        samples, and we also follow FDA/BAM as needed.
                                                    </p>

                                                    <div class="pbmit-heading">
                                                        <h3 class="pbmit-title">How should I send my sample?</h3>
                                                    </div>
                                                    <p class="pbmit-text">All samples must be sent in sterile
                                                        containers.</p>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="my-5">
                                            <div class="row align-items-center">

                                                <div class="col-md-12 col-xl-6">
                                                    <div class="ps-xl-2">


                                                        <div class="pbmit-heading">
                                                            <h3 class="pbmit-title">Bacterial Endotoxins</h3>
                                                        </div>
                                                        <p class="pbmit-text">Bacterial Endotoxin Testing (BET) detects
                                                            or quantifies endotoxins from Gram-negative bacteria using
                                                            amoebocyte lysate from the horseshoe crab.</p>

                                                        <div class="pbmit-heading">
                                                            <h3 class="pbmit-title">Why is Bacterial Endotoxin Testing
                                                                important?</h3>
                                                        </div>
                                                        <p class="pbmit-text">Bacterial Endotoxin Testing (BET) detects
                                                            or quantifies endotoxins from Gram-negative bacteria using
                                                            amoebocyte lysate from the horseshoe crab.</p>

                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-xl-6">
                                                    <div class="service-single-img-02" style="background-image: url({{ asset('images/microbiological_examination_gettyimages_507526558.jpg') }});
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    border-radius: 30px;
    padding: 180px 0;"></div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="pbmit-heading animation-style2">
                                            <h3 class="pbmit-title mb-3">How does New Jersey Laboratories test for
                                                Bacterial Endotoxins?</h3>
                                        </div>
                                        <p>We test for bacteria endotoxins by all three methods specified in the USP
                                            <85> – gel clot testing, turbidimetric testing, as well as chromogenic
                                                testing. Our analysts are trained in all three methods, giving clients
                                                the flexibility needed to obtain accurate results in a timely manner.
                                                Additionally, we perform limit and quantitative tests for bacterial
                                                endotoxins.</p>

                                        <div class="pbmit-heading animation-style2">
                                            <h3 class="pbmit-title mb-3">What are the requirements for Bacterial
                                                Endotoxins Testing at Banartis Parmeez Laboratories?</h3>
                                        </div>
                                        <p>Product validation is required before performing endotoxins testing.
                                            Endotoxin limit, as defined by regulatory agencies for your product, is also
                                            required to perform testing.</p>


                                        <div class="pbmit-heading animation-style2">
                                            <h3 class="pbmit-title mb-3">What methods do we use for Bacterial Endotoxins
                                                Testing?</h3>
                                        </div>
                                        <p>Banartis Parmeez Laboratories follows USP <85>, as well as the guidelines of
                                                ANSI/AAMI ST72:2011/(R)2016 as required by the FDA.</p>



                                        <div class="my-5">
                                            <div class="row align-items-center">
                                                <div class="col-md-12 col-xl-6">
                                                    <div class="service-single-img-02" style="background-image: url({{ asset('images/newsSocial-microbiology-lab.jpg') }});
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    border-radius: 30px;
    padding: 180px 0;"></div>
                                                </div>
                                                <div class="col-md-12 col-xl-6">
                                                    <div class="ps-xl-2">


                                                        <div class="pbmit-heading">
                                                            <h3 class="pbmit-title">Suitability Testing</h3>
                                                        </div>
                                                        <p class="pbmit-text">We perform two types of suitability
                                                            testing. One tests for the suitability of the counting
                                                            methods in the presence of a product, and is governed by USP
                                                            <61>. The other tests for the suitability of the test
                                                                methods in the presence of a product and is governed by
                                                                USP <62>.</p>



                                                    </div>
                                                </div>




                                            </div>


                                        </div>
                                        <div class="pbmit-heading animation-style2">
                                            <h3 class="pbmit-title mb-3">What is suitability testing, and why is it
                                                significant?</h3>
                                        </div>
                                        <p>Suitability testing is an integral part of any microbiological test system.
                                            It allows us to determine the appropriate diluent/dilution
                                            factors/enrichment media required to neutralize any inherent antimicrobial
                                            properties of drug products and ingredients (tested according to USP
                                            chapters <51>, <61> and <62>) when sample preparations are challenged with
                                                        specific, viable test microorganisms. We perform two types of
                                                        suitability testing. One tests for the suitability of the
                                                        counting methods in the presence of a product, and is governed
                                                        by USP <61>. The other tests for the suitability of the test
                                                            methods in the presence of a product and is governed by USP
                                                            <62>. In either case, select test organisms are spiked into
                                                                the product and cultured. The sample passes if a certain
                                                                percentage of the organisms are recovered, proving the
                                                                culture method suitable for the product.</p>





                                        <div class="pbmit-heading animation-style2">
                                            <h3 class="pbmit-title mb-3">When and how often is this test administered?
                                            </h3>
                                        </div>
                                        <p>Suitability testing is the first test performed on new samples. As long as
                                            the formula of a finished product is not changed, this test need only be
                                            administered once.<br><br>We note that some of our clients request that we
                                            run several tests concurrently, including suitability testing, but we
                                            recommend that suitability testing be performed prior to any other tests.
                                            Should suitability testing fail for your product, then the results of any
                                            concurrent tests would be invalidated and unusable.</p>

                                        <div class="pbmit-heading animation-style2">
                                            <h3 class="pbmit-title mb-3">What methods do you follow for suitability
                                                testing?</h3>
                                        </div>
                                        <p>We follow USP <51>, <61> and <62> for all suitability testing. Our
                                                        FDA-regulated laboratory meets strict CGMP requirements,
                                                        including rigorous documentation and quality assurance for all
                                                        testing performed.</p>

                                        <div class="pbmit-heading animation-style2">
                                            <h3 class="pbmit-title mb-3">Do I need to get suitability testing for my
                                                sample?</h3>
                                        </div>
                                        <p>We highly recommend suitability testing for all products, especially when
                                            products are being submitted to the FDA for approval. CGMP regulations,
                                            which are enforced by the FDA, require that methods are suitable for a given
                                            product. The FDA will require evidence that the tests given are valid for a
                                            given product with a recorded demonstration of validity.
                                            <br><br>
                                            In the absence of suitability testing, we would perform generic testing
                                            methods on your sample, but we would not be able to verify that the testing
                                            methods were valid for your sample. Consequently, there is a probability of
                                            obtaining false results. For example, if a sample contains antimicrobial
                                            properties, but those properties are not discovered during suitability
                                            testing and the sample is subjected to generic testing methods without
                                            accounting for or neutralizing antimicrobial properties, it is highly
                                            probable that any contamination in the sample will go undetected and result
                                            in a false negative.
                                            <br><br>
                                            Without suitability testing, the product will not withstand FDA scrutiny.
                                        </p>



                                        <div class="pbmit-heading animation-style2">
                                            <h3 class="pbmit-title mb-3">How should I submit my samples?</h3>
                                        </div>
                                        <p>Samples must be shipped to us in sterile containers. Contaminated containers
                                            could cause false positive results as our testing methods will detect
                                            contamination that does not necessarily originate from the sample itself. It
                                            is not possible to distinguish if a sample fails its testing specifications
                                            due to contaminated sample containers or faulty manufacturing process. In
                                            either case, the manufacturer may need to discard the contaminated stock and
                                            investigate their processes, which can result in loss of time and money.
                                            Therefore, it is in your best interest to carefully package your samples in
                                            sterile containers to prevent loss of time and product.
                                            <br><br>
                                            Add Sample amount. All Suitability requires 150g. All Routine Testing
                                            requires 30-40g.
                                        </p>


                                        <div class="pbmit-heading animation-style2">
                                            <h3 class="pbmit-title mb-3">What types of products have you performed
                                                suitability testing on?</h3>
                                        </div>
                                        <p>We can run suitability tests on many products. Examples of products we have
                                            run suitability tests on include pharmaceuticals, cosmetics, ointments, and
                                            toothpaste.</p>


                                        <div class="pbmit-heading animation-style2">
                                            <h3 class="pbmit-title mb-3">Preparatory Testing</h3>
                                        </div>
                                        <p>Preparatory testing is similar to suitability testing and is used to
                                            determine the appropriate diluent/dilution factor, enrichment media required
                                            to neutralize any inherent antimicrobial properties of dietary supplements
                                            and nutraceuticals (tested according to USP chapters <2021> and <2022>) when
                                                    sample preparations are challenged with specific, viable test
                                                    microorganisms.</p>

                                        <div class="pbmit-heading animation-style2">
                                            <h3 class="pbmit-title mb-3">Antimicrobial Effectiveness<br>
                                                What is Antimicrobial Effectiveness Testing?</h3>

                                            <p>Antimicrobial effectiveness testing demonstrates the effectiveness of
                                                preservatives added to drug products when challenged with specific test
                                                microorganisms and monitored for 28 days. USP <51> is followed.<br><br>

                                                    Antimicrobial preservatives are often added to pharmaceutical drugs
                                                    that contain water as a solvent or medium in order to protect drugs
                                                    from microbiological growth, or from microorganisms that may be
                                                    introduced inadvertently during or after the manufacturing process.
                                                    Alternatively, antimicrobial preservatives may be added to products
                                                    that are packaged in multiple-dose containers that will be handled
                                                    repeatedly by a consumer so that the growth of microorganisms are
                                                    inhibited.
                                                    <br><br>
                                                    All useful antimicrobial agents are toxic substances. To protect
                                                    consumers, the concentration of the preservative shown to be
                                                    effective in the final packaged product should be below a level that
                                                    may be toxic to human beings based on the recommended dosage of the
                                                    medicinal product.
                                                    <br><br>
                                                    The concentration of an added antimicrobial preservative can be kept
                                                    to a minimum if the active ingredients of a formulation are
                                                    intrinsically antimicrobial. Antimicrobial effectiveness, whether
                                                    inherent in the product or produced because of the addition of an
                                                    antimicrobial preservative, must be demonstrated for all injections
                                                    packaged in multiple-dose containers or for other products
                                                    containing antimicrobial preservatives.
                                                    <br><br>
                                                    Antimicrobial effectiveness testing allows us to see how effectively
                                                    the preservatives in a finished product kill off specified bacteria,
                                                    called challenge organisms, during the time period that the product
                                                    would be used by a consumer. Challenge organisms are generally based
                                                    on likely contaminants to a drug product when considering the
                                                    product’s physical attributes, formulation, and intended use.</p>




                                            <div class="pbmit-heading animation-style2">
                                                <h3 class="pbmit-title mb-3">What products typically require
                                                    antimicrobial effectiveness testing?</h3>
                                            </div>
                                            <p>Antimicrobial effectiveness testing demonstrates the effectiveness of
                                                preservatives added to drug products when challenged with specific test
                                                microorganisms and monitored for 28 days. USP <51> is followed.<br><br>

                                                    Antimicrobial preservatives are often added to pharmaceutical drugs
                                                    that contain water as a solvent or medium in order to protect drugs
                                                    from microbiological growth, or from microorganisms that may be
                                                    introduced inadvertently during or after the manufacturing process.
                                                    Alternatively, antimicrobial preservatives may be added to products
                                                    that are packaged in multiple-dose containers that will be handled
                                                    repeatedly by a consumer so that the growth of microorganisms are
                                                    inhibited.
                                                    <br><br>
                                                    All useful antimicrobial agents are toxic substances. To protect
                                                    consumers, the concentration of the preservative shown to be
                                                    effective in the final packaged product should be below a level that
                                                    may be toxic to human beings based on the recommended dosage of the
                                                    medicinal product.
                                                    <br><br>
                                                    The concentration of an added antimicrobial preservative can be kept
                                                    to a minimum if the active ingredients of a formulation are
                                                    intrinsically antimicrobial. Antimicrobial effectiveness, whether
                                                    inherent in the product or produced because of the addition of an
                                                    antimicrobial preservative, must be demonstrated for all injections
                                                    packaged in multiple-dose containers or for other products
                                                    containing antimicrobial preservatives.
                                                    <br><br>
                                                    Antimicrobial effectiveness testing allows us to see how effectively
                                                    the preservatives in a finished product kill off specified bacteria,
                                                    called challenge organisms, during the time period that the product
                                                    would be used by a consumer. Challenge organisms are generally based
                                                    on likely contaminants to a drug product when considering the
                                                    product’s physical attributes, formulation, and intended use.</p>

                                            <div class="pbmit-heading animation-style2">
                                                <h3 class="pbmit-title mb-3">What products typically require
                                                    antimicrobial effectiveness testing?</h3>
                                            </div>
                                            <p>Any product containing preservatives having antimicrobial properties
                                                would be subject to antimicrobial effectiveness testing.</p>


                                            <div class="pbmit-heading animation-style2">
                                                <h3 class="pbmit-title mb-3">What procedures do you follow for
                                                    antimicrobial effectiveness testing?</h3>
                                            </div>
                                            <p>We follow USP <51> for all antimicrobial effectiveness testing.</p>


                                            <div class="pbmit-heading animation-style2">
                                                <h3 class="pbmit-title mb-3">How should I send my product and/or sample?
                                                </h3>
                                            </div>
                                            <p>The procedures and acceptance criteria for effectiveness apply to a
                                                product in the original, sealed container in which it has been or will
                                                be distributed by the manufacturer. The test does not need to be
                                                conducted in these containers, but please be careful to avoid using
                                                materials that can interact with the preservative in the containers that
                                                are used for antimicrobial effectiveness testing.
                                                <br><br>
                                                All samples must be sent in sterile containers.
                                            </p>




                                        </div>


                                    </div>
                                </div>









                            </div>
                            <a class="pbmit-btn pbmit-btn-blackish" href="{{ route('home') }}#contact">
                                <span class="pbmit-button-content-wrapper">
                                    <span class="pbmit-button-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60">
                                            <path
                                                d="m31 50.979c-.362.007-.727-.081-1.049-.28-.929-.572-1.212-1.814-.653-2.742.047-.082 5.886-9.826 17.032-15.958h-43.33c-1.103 0-2-.897-2-2s.897-2 2-2h43.33c-11.084-6.097-16.989-15.884-17.047-15.982-.547-.934-.244-2.177.689-2.73.946-.561 2.192-.236 2.757.715.909 1.45 9.433 14.449 24.722 18.046.915.225 1.549 1.026 1.549 1.952s-.63 1.729-1.532 1.948c-15.354 3.61-23.849 16.626-24.767 18.099-.36.577-1.025.919-1.7.932z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="pbmit-button-text">Contact Now</span>
                                </span>
                            </a>
                        </div>
                        <div class="col-md-12 col-xl-3 service-right-col sidebar">
                            <aside class="service-sidebar">
                                <aside class="widget post-list">
                                    <h2 class="widget-title">Our Service</h2>
                                    <div class="all-post-list">
                                        <ul>
                                            <li><a href="{{ route('micro') }}"> Microbiology Testing </a></li>
                                            <li><a href="{{ route('physico') }}"> Physico-Chemical
                                                    Characterization </a></li>
                                            <li><a href="{{ route('ich') }}"> ICH stability Studies </a></li>
                                            <li><a href="{{ route('package') }}"> Packaging Material Testing
                                                </a></li>

                                        </ul>
                                    </div>
                                </aside>
                                <aside class="widget pbmit-service-ad">
                                    <div class="textwidget">
                                        <div class="pbmit-service-ads">
                                            <div class="pbmit-ads-call">Call 631-213-1525</div>
                                            <h4 class="pbmit-ads-subtitle">Let’s Research</h4>
                                            <h3 class="pbmit-ads-title">More Science</h3>
                                            <div class="pbmit-ads-btn">
                                                <a href="tel:631-213-1525">
                                                    <span class="pbmit-button-text">Contact us Now</span>
                                                    <span class="pbmit-button-icon-wrapper">
                                                        <span class="pbmit-button-icon">
                                                            <i class="pbmit-base-icon-black-arrow-1"></i>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                                <aside class="widget pbmit-download-info">
                                    <h2 class="widget-title">Forms</h2>
                                    <div class="textwidget">
                                        <div class="pbmit-download">
                                            <div class="pbmit-item-download">
                                                <a href="{{ asset('images/analysis-request-form.pdf') }}" target="_blank"
                                                    rel="noopener">
                                                    <div class="pbmit-download-content">
                                                        <div class="pbmit-download-wrap">
                                                            <i class="pbmit-base-icon-file"></i>
                                                            <div class="pbmit-title-wrap">
                                                                <h3 class="pbmit-download-title">Download Test Request
                                                                    Form</h3>
                                                                <span>Brouchers</span>
                                                            </div>
                                                        </div>
                                                        <span class="pbmit-download-item">
                                                            <i
                                                                class="pbminfotech-base-icons pbmit-righticon pbmit-base-icon-download"></i>
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </aside>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Service Details End -->

        </div>
        @endsection