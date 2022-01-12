 <?php global $themesbazar; ?> 
			<div class="footer">
				<div class="row">
					<div class="col-md-3">
						<a href="<?php bloginfo(home); ?>"><img src=" <?php echo $themesbazar['footer-logo']['url']?>" alt="Logo" width="100%"></a>
					</div>
					<div class="col-md-5">
						<?php echo $themesbazar['editorial']?>
					</div>
					<div class="col-md-4">
						<?php echo $themesbazar['editorial-tow']?>
					</div>
				</div>
			</div>
			
			<div class="footer-02">
				<div class="row">
					<div class="col-md-6"><div class="copyright"><?php echo $themesbazar['copyright']?></div></div>
					<div class="col-md-6"><div class="design">Desing & Developed By <a href="http://www.themesbazar.com" target="_blank">ThemesBazar.Com</a></div></div>
				</div>
			</div>
			
			
			</div>	
		</section>	
		
	
	
 <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
</button> 
			 
			 <script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>



		
		<?php wp_footer();?>
	</body>
</html>