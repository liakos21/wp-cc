<?php
add_action('wp_head', 'baked_cc_frontend');

function baked_cc_frontend() {
	if(get_option('baked_cc_switcher')) {
		?>
			<style>.cc-message { max-height: 55px; } .cc-message.active { overflow-y:auto; max-height: unset; } .intromsg { display:block; margin-top:20px; } #morebtn { display:inline-block; margin-left:15px; text-decoration:underline; cursor:pointer; }</style>
		<?php
		if(get_locale() == 'el') {
			?>
			<script>
			window.addEventListener("load", function(){
			window.cookieconsent.initialise({
			  "palette": {
			    "popup": {
			      "background": "#000"
			    },
			    "button": {
			      "background": "#f1d600"
			    }
			  },
			  "showLink": false,
			  "content": {
			    "message": "<span class='intromsg'>Για τη βελτιστοποίηση της εμπειρίας σας κατά την περιήγηση στο site μας, χρησιμοποιούμε cookies<span id='morebtn' onclick='expandCC()'>Περισσότερα</span></span><br><strong>Τι είναι τα cookies;</strong><br>Cookies ονομάζονται κάποια μικρά αρχεία με πληροφορίες - συνήθως σε μορφή κειμένου - τα οποία αποθηκεύονται στον browser (Mozilla, Firefox, Chrome, Internet Explorer, κ.λπ.) που χρησιμοποιεί κανείς για να επισκεφτεί μια ιστοσελίδα. Έτσι, τα site αποκτούν ένα είδος ‘μνήμης’ μεταξύ των επισκέψεών σας και αναγνωρίζουν τις προτιμήσεις σας. Αυτό συμβάλλει ώστε η πλοήγησή σας να είναι πιο εξατομικευμένη και προσωπική.<br><strong>Πώς χρησιμοποιούνται τα cookies;</strong><br>Στη συγκεκριμένη ιστοσελίδα χρησιμοποιούμε τους παρακάτω τύπους cookies:<br><strong>Cookies διαφήμισης (Facebook Ads, Google Adwords, Twitter Ads)</strong><br>Παρακολουθώντας τη συμπεριφορά και τα ενδιαφέροντα του χρήστη στις ιστοσελίδες, μπορούμε να εξατομικεύσουμε τις διαφημίσεις που εμφανίζονται. Έτσι, η χρήση cookies γίνεται για να προβάλλουμε τις διαφημίσεις μας στο καλύτερο δυνατό κοινό και να ενημερώνουμε τους χρήστες για τα νέα και τις προσφορές μας.<br><strong>Cookies στατιστικών (Google Analytics)</strong><br>Καταγράφοντας την επισκεψιμότητα στο site μπορούμε να καταλάβουμε καλύτερα τι λειτουργεί για τους χρήστες και τι όχι. Η χρήση cookies λοιπόν, γίνεται για να βελτιώσουμε την ιστοσελίδα ως προς τα γραφικά της χαρακτηριστικά, τη λειτουργία και το περιεχόμενο που προβάλλεται.<br><strong>Στοιχεία χρήστη</strong><br>Τα στοιχεία και οι προτιμήσεις των χρηστών συλλέγονται ανώνυμα από τις παραπάνω εταιρίες και δεν προσδιορίζουν τα άτομα μεμονομένα αλλά μονάχα ως ποσοστό. Οι μόνες πληροφορίες που καταγράφονται στα cookies είναι σχετικές με τη συμπεριφορά του χρήστη στην ιστοσελίδα. Σε καμία περίπτωση δε διατηρούμε αρχείο με προσωπικά στοιχεία των επισκεπτών και δεν υπάρχει η δυνατότητα να τους αναγνωρίσουμε ως άτομα, ούτε στο φυσικό ούτε στον ψηφιακό κόσμο. Ο χρήστης μπορεί να τροποποιήσει τις ρυθμίσεις στην πλοήγηση (browser) για να μπλοκάρει ορισμένα ή και όλα τα cookies.",
			    "dismiss": "Αποδοχή"
			  }
			})});
			</script>
			<?php
		}
		else {
			?>
			<script>
			window.addEventListener("load", function(){
			window.cookieconsent.initialise({
			  "palette": {
			    "popup": {
			      "background": "#000"
			    },
			    "button": {
			      "background": "#f1d600"
			    }
			  },
			  "showLink": false,
			  "content": {
			    "message": "<span class='intromsg'>In order to provide you with the best experience during your visit we use cookies<span id='morebtn' onclick='expandCC()'>Learn More</span></span><br><strong>What are cookies?</strong><br>Cookies are small files of information - usually in text format - that are stored locally on your browser (Mozilla, Firefox, Chrome, Internet Explorer, etc.) the software you use to browse the web. Thus, the sites you visit can 'remember' your prior visits and identify your actions on the website. This contributes to your visit being more personal.<br><strong>How are cookies used?</strong><br>On this website we use the following types of cookies:<br><strong>Advertising cookies (Facebook Ads, Google Adwords, Twitter Ads)</strong><br>By monitoring user behaviour on our website we can personalize the ads that show up in the network of ads we utilize. By these means we can show our ads in the best possible way and inform users of our news and offers.<br><strong>Statistics cookies (Google Analytics)</strong><br>Recording website visits and behaviour we can understand better and faster what our visitors want. Using these cookies helps us provide you with a better experience as based on the stats we work to enhance the graphic design, the programming and the information of our website.<br><strong>User information</strong><br>User data and preferences are recorded anonymously by the advertising companies mentioned in this cookie policy and in no way can we recognize a single user behaviour. The whole process is anonymous.The only information that is stored on cookies is user behaviour on the website.We never keep a record or files of personal information of our users and have no means to identify users by name, neither in the digital nor in the physical space.All users can change the setting of their browser and delete or block all cookies.",
			    "dismiss": "Accept"
			  }
			})});
			</script>
			<?php
		}
		?>
		<script>
			function expandCC() {
				var cc = document.getElementsByClassName('cc-message')[0];
				if(cc.classList.contains('active')) {
					cc.classList.remove('active');
				}
				else {
					cc.classList.add('active');
				}
			}
		</script>
		<?php
	}
}