<?php
// Array of ISO/IEC 27001 Annex A controls
$controls = array(
    "A.5 Information Security Policies",
"A.5.1.1 Policies for Information Security",
"A.5.1.2 Review of the policies for information security",
"A.6 Organization of Information Security",
"A.6.1.1 Policies for Information Security",
"A.6.1.2 Review of the policies for information security",
"A.6.1.3 Policies for Information Security",
"A.6.1.4 Review of the policies for information security",
"A.6.2.1 Mobile device policy",
"A.6.2.2 Telworking",
"A.7 Human Resource Security",
"A.7.1.1 Priort to employment",
"A.7.1.2 Terms and conditions of employment",
"A.7.2.1 Management responsibilities",
"A.7.2.2 Information security awareness, education and training",
"A.7.2.3 Disciplinary process",
"A.7.3.1 Termination or change of employment responsibilities",
"A.8 Asset Management",
"A.8.1.1 Inventory of assets",
"A.8.1.2 Ownership of assets",
"A.8.1.3 Acceptable use of assets",
"A.8.1.4 Return of assets",
"A.8.2.1 Classification of information",
"A.8.2.2 Labeling of information",
"A.8.2.3 Handling of assetes",
"A.8.3.1 Management of removable media",
"A.8.3.2 Disposal of media",
"A.8.3.3 Physical media transfer",
"A.9 Access Control",
"A.9.1.1 Access control policy",
"A.9.1.2 Access of networks and network services",
"A.9.2.1 User registration and de-registration",
"A.9.2.2 User access provisioning",
"A.9.2.3 Management of privileged access rights",
"A.9.2.4 Management of secret authentication informatoin of users",
"A.9.2.5 Review of user access rights",
"A.9.2.6 Removal or adjustment of access rights",
"A.9.3.1 User responsibilities",
"A.9.4.1 Information access restriction",
"A.9.4.2 Secure log-on procedures",
"A.9.4.3 Password management system",
"A.9.4.4 Use of privileged utility programs",
"A.9.4.5 Access control to program source code",
"A.10 Cryptography",
"A.10.1.1 Policy on the use of cryptographic controls",
"A.10.1.2 Key Management",
"A.11 Physical and Environmental Security",
"A.11.1.1 Physical security perimeter",
"A.11.1.2 Physical entry control",
"A.11.1.3 Securing offices, rooms, facilities",
"A.11.1.4 Protecting against external and environmental threats",
"A.11.1.5 Working in secure areas",
"A.11.1.6 Delivery and loading areas",
"A.11.2.1 Equipment siting and protection",
"A.11.2.2 Supporting utilities",
"A.11.2.3 Cabling security",
"A.11.2.4 Equipment maintenance",
"A.11.2.5 Removal of assets",
"A.11.2.6 Security of equipment and assets off-premises",
"A.11.2.7 Secure disposal or re-use of equipment",
"A.11.2.8 Unattended user equipment",
"A.11.2.9 Clear desk and clear screen policy",
"A.12 Operations Security",
"A.12.1.1 Documented operating procedures",
"A.12.1.2 Change management",
"A.12.1.3 Capacity management",
"A.12.1.4 Seperation of development, testing and operational environments",
"A.12.2.1 Controls against malware",
"A.12.3.1 Information backup",
"A.12.4.1 Event logging",
"A.12.4.2 Protection of log information",
"A.12.4.3 Administrator and operator logs",
"A.12.4.4 Clock synchronization",
"A.12.5.1 Installation of software on operational systems",
"A.12.6.1 Management of systems audit controls",
"A.12.6.2 Restrictions on software installation",
"A.12.7.1 Information systems audit controls",
"A.13 Communications Security",
"A.13.1.1 Network controls",
"A.13.1.2 Security of network services",
"A.13.1.3 Segregation in networks",
"A.13.2.1 Information transfer policies and procedures",
"A.13.2.2 Agreements on information transfer",
"A.13.2.3 Electronic messaging",
"A.13.2.4 Confidentiality or non-disclosure agreements",
"A.14 System acquisition, development and maintenance",
"A.14.1.1 Information Security requirements analysis and specifications",
"A.14.1.2 Securing application services on public networks",
"A.14.1.3 Protecting application services transactions",
"A.14.2.1 Secure development policy",
"A.14.2.2 System changes control procedures",
"A.14.2.3 Technical review of applications after operating platform changes",
"A.14.2.4 Restrictions on changes to software packages",
"A.14.2.5 Secure system engineering principles",
"A.14.2.6 Secure development environment",
"A.14.2.7 Outsoruced development",
"A.14.2.8 System security testing",
"A.14.2.9 System acceptance testing",
"A.14.3.1 Protection of test data",
"A.15 Supplier Relationships",
"A.15.1.1 Information security policy for supplier relationships",
"A.15.1.2 Addressing security within supplier agreements",
"A.15.1.3 Information and communications technology supply chain",
"A.15.2.1 Monitoring and review of supplier services",
"A.15.2.2 Managing changes to supplier sevices",
"A.16 Information Security Incident Management",
"A.16.1.1 Responsibilities and procedures",
"A.16.1.2 Reporting information security events",
"A.16.1.3 Reporting information security weaknesses",
"A.16.1.4 Assessment of and decision on information security events",
"A.16.1.5 Response to information security incidents",
"A.16.1.6 Learning from information security incidents",
"A.16.1.7 Collection of evidence",
"A.17 Information Security Aspects of Business Continuity Management",
"A.17.1.1 Planning information security continuity",
"A.17.1.2 Implementing informatoin security continuity",
"A.17.1.3 Verify, review and evaluate information security continuitiy",
"A.17.2.1 Availability of information processing facilities",
"A.18 Compliance",
"A.18.1.1 Identification of applicable legislation and contractual requirements",
"A.18.1.2 Intellectual property rights",
"A.18.1.3 Protection of records",
"A.18.1.4 Privacy and protection of personally identifiable information",
"A.18.1.5 Regulation of cryptographic controls",
"A.18.2.1 Independent review of information security",
"A.18.2.2 Compliance with security policies and standards",
"A.18.2.3 Technical compliance review",
    // Add more controls as needed
);


?>
<h2>ISO/IEC 27001 Annex A Controls</h2>
<input type="text" id="searchInput" placeholder="Search for controls...">
<div class="controls-list">
    <ul id="controlsList">
        <?php
        // Loop through the controls array to display each control with an arrow as a list item
        foreach ($controls as $control) {
            echo "<li>$control</li>";
        }
        ?>
    </ul>
</div>

<script>
    // JavaScript function to filter controls based on search input
    document.getElementById("searchInput").addEventListener("keyup", function () {
        var input, filter, ul, li, a, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        ul = document.getElementById("controlsList");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    });
</script>
<!-- <h2>ISO/IEC 27001 Annex A Controls</h2>
<div class="controls-list">
    <ul>
    <--?php
        // Loop through the controls array to display each control with an arrow as a list item
        foreach ($controls as $control) {
            echo "<li>$control</li>";
        }
        ?>
    </ul>
</div> -->
