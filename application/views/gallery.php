    <!-- / fim dos arquivos utilizados pelo jQuery lightBox plugin -->

    <!-- Ativando o jQuery lightBox plugin -->
    <script type="text/javascript">
    $(function() {
        $('#gallery a').lightBox();
    });
    </script>
   	<style type="text/css">
	/* jQuery lightBox plugin - Gallery style */
	#gallery {
		background-color: #444;
		padding: 10px;
		width: 520px;
	}
	#gallery ul { list-style: none; }
	#gallery ul li { display: inline; }
	#gallery ul img {
		border: 5px solid #3e3e3e;
		border-width: 5px 5px 20px;
	}
	#gallery ul a:hover img {
		border: 5px solid #fff;
		border-width: 5px 5px 20px;
		color: #fff;
	}
	#gallery ul a:hover { color: #fff; }
	</style>

<h2 id="example">Example</h2>
<p>Click in the image and see the <strong>jQuery lightBox plugin</strong> in action.</p>
<div id="gallery">
    <ul>
        <li>
            <a href="<?php echo base_url();?>photos/image1.jpg" title="Utilize a flexibilidade dos seletores da jQuery e crie um grupo de imagens como desejar. $('#gallery').lightBox();">
                <img src="<?php echo base_url();?>photos/thumb_image1.jpg" width="72" height="72" alt="" />
            </a>
        </li>
        <li>
            <a href="<?php echo base_url()?>photos/image2.jpg" title="Utilize a flexibilidade dos seletores da jQuery e crie um grupo de imagens como desejar. $('#gallery a').lightBox();">
                <img src="<?php echo base_url()?>photos/thumb_image2.jpg" width="72" height="72" alt="" />
            </a>
        </li>
        <li>
            <a href="<?php echo base_url()?>photos/image3.jpg" title="Utilize a flexibilidade dos seletores da jQuery e crie um grupo de imagens como desejar. $('#gallery a').lightBox();">
                <img src="<?php echo base_url()?>photos/thumb_image3.jpg" width="72" height="72" alt="" />
            </a>
        </li>
        <li>
            <a href="<?php echo base_url()?>photos/image4.jpg" title="Utilize a flexibilidade dos seletores da jQuery e crie um grupo de imagens como desejar. $('#gallery a').lightBox();">
                <img src="<?php echo base_url()?>photos/thumb_image4.jpg" width="72" height="72" alt="" />
            </a>
        </li>
        <li>
            <a href="<?php echo base_url()?>photos/image5.jpg" title="Utilize a flexibilidade dos seletores da jQuery e crie um grupo de imagens como desejar. $('#gallery a').lightBox();">
                <img src="<?php echo base_url()?>photos/thumb_image5.jpg" width="72" height="72" alt="" />
            </a>
        </li>
    </ul>
</div>
