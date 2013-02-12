
<!--				<a href="./download/Presentation_master_recherche_christophe_rigaud.pdf" title="Présentation de master SDS de Christophe Rigaud" onclick="window.open(this.href); return false;">PDF - Présentation master SDS</a>-->
	<h4>Abstract</h4>



	<p>
	Keywords: image interpretation, windowing, inference engine, topology, photometry.
	<br />		
	<br />	
					This job start from the state of the art of image interpretation led by topological and photometrical
information to an new application method. Using a priori informations is a method to anticipate the content of an image and then
to improve the processing. The proposed method represent these information as conceptual graphs and infer image
content. It is more precisely the number of classes in the image and their photometric relations,
at each iteration of a segmentation procedure. One important point is that it consider only non
quantitative information in order to specify the image processing and fit to its particularities.
Then, a quantification of the benefits is performed for polluting data reduction, processing time improvement and strength.
The last part of this work is an application to medical images from abdomen that is proceeded in order to clearly show liver tumors and vessel system for diagnostic assistance purpose.
	</p>

	<table width=100%>
		<tr>
			<td><h4>Problem statement</h4></td>
			<td><a class="top" href="#menu_top" title="Top"><img src="../../../../cv/detail/img/top_arrow.gif" alt="Top"></a></td>
		</tr>
	</table>
	<p >
					How to represent and use non quantitative informations for image content understanding? An example of situation that could be advantageous is the following:
	</p>
	<table align="center">
		<tr>
			<td><img src="../../../../cv/detail/img/body.jpg" title="Body" alt="body" width="200px" /></td>
			<td><img src="../../../../cv/detail/img/liver.jpg" title="Liver" alt="liver" width="200px" /></td>
			<td><img src="../../../../cv/detail/img/venous_system.jpg" title="Venous system" alt="Venous system" width="200px" /></td>
		</tr>
	</table>
	
	<p>
		This example concern the volume rendering of a medical image. The windowing range is crucial to improve perception of a region (organ). In this example, the aim is to display venous system from the left figure, knowing that the bones are segmented. Knowing that the hepatic vessels is not included in bones (a priori topologic information), we can remove the bones from the image (middle figure). Doing the hypothesis that the hepatic vessels is more bright than the liver we can update the windowing in order to show only the hepatic vessels (right figure). 				
	</p>


	<table width=100%>
		<tr>
			<td><h4>Steps</h4></td>
			<td><a class="top" href="#menu_top" title="Top"><img src="../../../../cv/detail/img/top_arrow.gif" alt="Top"></a></td>
		</tr>
	</table>				
	<p>
		The steps can be resume by the following items :
		</p>					
	<dl>
	  <dt>Formalization</dt>
		<dd>- representation of conceptual information</dd>
		<dd>- segmentation process modeling</dd>
	  <dt>Inference engine (deduction)</dt>
		<dd>- region Of Interest</dd>
		<dd>- number of classes et ordering</dd>		
	  <dt>Image</dt>
		<dd>- masking</dd>
		<dd>- region clustering</dd>	
		<dd>- optimal windowing</dd>									
	  <dt>Evaluation</dt>
		<dd>- synthetic images</dd>
		<dd>- clustering algorithm</dd>	
		<dd>- quantification of benefits</dd>
	  <dt>Application</dt>
		<dd>- medical images</dd>
		<dd>- cluster identification</dd>	
		<dd>- windowing and volume rendering</dd>
	</dl>
	
	<table width=100%>
		<tr>
			<td><h4>Results</h4></td>
			<td><a class="top" href="#menu_top" title="Top"><img src="../../../../cv/detail/img/top_arrow.gif" alt="Top"></a></td>
		</tr>
	</table>				
	<p>
					Following the quantitative method evaluation proposed on synthetic images, it been applied on medical images. These data are composed of image and mask (DICOM). The example below shows an image DICOM from X ray scanner, liver and kidney masks. 
				
				
<!--					Suite à une évaluation quantitative de la méthode proposée sur des images synthétiques, elle a été appliquée à des données médicales. Ces données sont constituées d'images et de masques de certaines structures (organes) au format DICOM. Les trois images ci-dessous montrent respectivement une image DICOM brute, un masque du foie et un masque de rein.-->
				</p>
				<table align="center">
					<tr>
						<td><img src="../../../../cv/detail/img/dicom.jpg" alt="body" title="Image DICOM" alt="Image DICOM" width="200px" /></td>
						<td><img src="../../../../cv/detail/img/mask_liver.jpg" title="Liver mask" alt="Liver mask" width="200px" /></td>
						<td><img src="../../../../cv/detail/img/mask_kidney.jpg" title="Kidney mask" alt="Kidney mask" width="200px" /></td>
					</tr>
				</table>
				
				<p>
					The more significant results from the method are the volume rendering below, it shows liver tumors (left figure) and hepatic vessels in liver (middle figure) and hepatic vessels (right figure) :
				
<!--					Nos résultats les plus significatifs sont les rendus volumiques ci-dessous, il représentent des -->
<!--					tumeurs du foie (à gauche), le foie plus le système hépatique (au milieu) et le système hépatique -->
<!--					(à droite) tous extraits d'une image de patient réel.-->
				</p>
				<table align="center">
					<tr>
						<td><img src="../../../../cv/detail/img/im_1_4_tumor_rendering_manual.jpg" alt="body" title="Tumor volume rendering" width="200px" /></td>
						<td><img src="../../../../cv/detail/img/im_3_0_render_vessel_1_sigma.jpg" alt="liver" title="Hepatic vessels volume rendering" width="200px" /></td>
						<td><img src="../../../../cv/detail/img/im_3_0_render_vessel_kmean.jpg" alt="vessel" title="Hepatic vessels volume rendering" width="200px" /></td>
					</tr>
				</table>				
				<br />
			
	<table width=100%>
		<tr>
			<td><h4>Conclusion</h4></td>
			<td><a class="top" href="#menu_top" title="Top"><img src="../../../../cv/detail/img/top_arrow.gif" alt="Top"></a></td>
		</tr>
	</table>
	<p>
					
					A priori knowledge use confirm, according to the quantitative analysis of the benefits, the interests of the proposed method for both synthetic and medical image. There is an interest obviously to use a priori knowledge for image interpretation.
					One important point of this success seems to be masking in order to focus a region with a minimum of polluting data. Computing time is then saved. Segmentation performance is improved by a priori number of classes, this allows to identify precisely each class in order to apply an optimal windowing to a structure or organ (visualization improved).
				</p>
<!-- END PAGE -->
