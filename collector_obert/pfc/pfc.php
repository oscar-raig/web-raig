<?php
	session_start();
	if (!isset($_SESSION['logged'])) {
		header( 'Location: http://www.raig.cat/login/login.php' ) ;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html>
	<head>
	<title>Electronics Final Project</title>
	<meta name="description" content=" Oscar Raig Electronics Final Project" />
	<meta name="keywords" content="electronics project transistors application CMOS"/>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
	<link rel="stylesheet" type="text/css" href="http://www.raig.cat/css_raig.css"/>
	</head>
	
	<body>
		<div id="menu">
			<div id="home">
				<a href="http://www.raig.cat">Inici</a>
				<a href="http://www.raig.cat/collector_obert/collector_obert_index.html">&nbsp; &gt;	&nbsp;collector_obert</a>
			</div>
		</div>
		<div id="principal">
		
			<div id="inside_principal">
				<h1>Final Engineering electronics   Project</h1>
				<ol>
					<li><a href="#vlsi" class="anchor_boxes">VLSI</a></li>
				    <li><a href="#mos" class="anchor_boxes">MOS</a></li>
					<li><a href="#cadence" class="anchor_boxes">Cadence</a></li>
					<li><a href="#project_summary" class="anchor_boxes">Project Summary</a></li>
					<li><a href="#goals" class="anchor_boxes">Goals to achieve</a></li>
					<li><a href="#study_of_circuit" class="anchor_boxes">Study of the circuit</a></li>
					<li><a href="http://www.raig.cat/collector_obert/pfc/docs/acronyms.html" class="anchor_boxes">Acronyms</a></li>
					<li><a href="#bibliografia" class="anchor_boxes">Bibliograf&iacute;a</a></li>
				</ol>
				<a name="vlsi"></a>
				<h4>VLSI</h4>
				<p>When we speak about circuits we have two types of circuits.
				One type that have discrete components, transistors, capacitors, resistors and the other type is integrated
				circuits, it 's made with one discrate components and inside this element are the
				transistors, capacitors and resistors. Ref 14</p>
				<p>Depending on the number of element inside the integrated circuit we can 
				speak about Ref 14:
				<ul>
					<li>SSI: Small Scale Integration</li>
					<li>MSI: Medium Scale Integration</li>
					<li>LSI: Large Scale Integration</li>
					<li>VLSI:Very Large Scale Integration</li>
					<li>ULSI:Ultra Larege Scale Integration </li>
				</ul>
				
				<a name="mos"></a>
				<h3>MOS</h3>
				
				<table class="figure_table" >
					<tr class="figure_tr">
						<td class="figure_td">
							<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/imatges/nmos_symbol.png"/>
						</td>
					</tr>
					<tr class="figure_tr">
						<td class="figure_tr">
							Symbols of a NMOS transistor (Ref 14)
						</td>
					</tr>
				</table>
				
				<table class="figure_table" >
					<tr class="figure_tr">
						<td class="figure_td">
							<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/imatges/nmos_section.png"/>
						</td>
					</tr>
					<tr class="figure_tr">
						<td class="figure_tr">
							Section of a NMOS transisotr (Ref 14)
						</td>
					</tr>
				</table>
				
				
				<p>
				Here we show the regions of operation for a NMOS transistor
				</p>
				<table class="figure_table" >
					<tr>
						<td>
							<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/imatges/modes_treball_nmos.gif"/>
						</td>
					</tr>
					<tr>
						<td>
							Operational modes of NMOS( <a href="#ref10"> Ref.10 </a>) 
						</td>
					</tr>
				</table>
				<br>
				The three operational modes are:
				<ul>	
					<li>Cutoff,suthreshold, or weak-inversion mode</li>
					<li>Triode mode or linear region:  the relation is quadratic with Vds and linear with (Vgs-Vt)</li>
					<li>Saturation or active mode:The relation is quadratic with (Vgs-Vt)</li>
				</ul>
				<br>
				For the PMOS transistor is:
				<table class="figure_table" >
					<tr>
						<td>
							<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/imatges/modes_treball_pmos.gif"/>
						</td>
					</tr>
					<tr>
						<td>
							Operational modes of PMOS( <a href="#ref10"> Ref.10 </a> ) 
						</td>
					</tr>
				</table>
				
				<table class="figure_table">
					<tr>
						<td>
							<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/imatges/nmos_model_transistor.jpg"/>
						</td>
					</tr>
					<tr>
						<td>
							Transistor Model of NMOS (<a href="#ref10"> Ref.10 </a>)
						</td>
					</tr>
				</table>
						
						
				<br>
				<div class="exercise">
					Exercise
					<div class="exercise_question"> 
						<p> Calculate the current of the drenator of a MOS transistor with this data</p>
						<p>
						We can calculate the Value of the ID for this params:
						Vds= 5V, Vgs = 5V, VT= 1V,  K=20uA/V2, W/L = 1
						</p>
					</div>
					<div class="exercise_solution">
						<p>
						On K=un  Cox
						</p>
						<p>
						First of all, we should know in which region we are working. As we have 
						Vds = 5V, Vgs = 5V and VT = 1V then we can say Vds> VT and Vds > VDS - VT.
						</p>
						<p>
						This means we are in saturation or active mode. We use
						</p>
						
					        <a href="http://www.codecogs.com/eqnedit.php?latex=I_{D} = \frac{K W}{2 L} {(V_{gs}-V_{t}})^{2} \\ I_{D} = \frac{20\cdot 10^{-6}}{2 } (5-1)^{2} =0.16 mA" target="_blank"><img src="http://latex.codecogs.com/gif.latex?I_{D} = \frac{K W}{2 L} {(V_{gs}-V_{t}})^{2} \\ I_{D} = \frac{20\cdot 10^{-6}}{2 } (5-1)^{2} =0.16 mA" title="I_{D} = \frac{K W}{2 L} {(V_{gs}-V_{t}})^{2} \\ I_{D} = \frac{20\cdot 10^{-6}}{2 } (5-1)^{2} =0.16 mA" /></a>
					</div>
				</div>
				
				<br>
				
				<p>Normal translinear transistor with a sbhtreshold MOS transistor 
				with its source and bulk connected together</p>
				<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/imatges/circuit_normal.jpg"/>
				<p> Simulation of MOS transistor</p>
				<p>We are showing in X-axix  VDS starts at 0 and ends at 2V.
				And in the Y-axis whe show Id in logaritmic scale.
				</p>
				<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/imatges/simulacio_del_circuit_normal.jpg"/>
				<p>
				The same circuit in X-axis Vds is 1.8 and Vgs starts at 0 and ends at 5 V.
				And in the Y-Axis Ids
				</p>
				<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/imatges/nmos_simulacio_vgs_0_5_logaritmic.jpg"/>
				
				<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/imatges/nmos_simulacio_vgs_0_5_no_logaritmic.jpg"/>
				
				<p>For simulations we are using transistors LF150 from <a href="http://www.lfoundry.com/" target="_blank" >lfoundry</a>
				<p>We use the nmos_hs_4 transistor with the next characteristics:
				Vt = 0.58 V
				The Vt Threshold voltage (voltatge llindar) is usually defined as the gate voltage where an inversion layer forms at 
				the interface between the insulating layer (oxide) and the substrate (body) of the transistor. 
				Ids = 600 uA/um
				BVds = 4 V
				Ioff(typ/max) pA/um = 	5/70
				</p>
				
				
				
				<a name="cadence"></a>
				<h3>Cadence</h3>
				<p>
					Choose the simulator
					<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/imatges/cadence_menu_pop_up_choosing_simulator.gif"/>
					<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/imatges/cadence_dialog_pop_up_choosing_simulator.gif"/>
					
				</p>
				
				
				
				
				
				<a name="project_summary"></a>
				<h3>Project Summary</h3>
				
				<p>Daniel Fernandez and Jordi Madrenas extened the weak-inversion exponential characteristic of
				a MOS transistor to seven decades of current. This circuits can be used to implement log-domain or tranlinear circuits up 
				to the strong inversion region allowing higly-accurate implementations of translinear 
				loop functions and higher biasing currents
				(and potentially higher frequency operation) than MOS weak-inversion biased log-domain circuits.</p>
				<p>
				<p>Goals</p>
				<p>Analyze the basic translinear to know the full behavour.</p>
				<h2>Translinear circuits: What's in a Name?</h2>


				<p>
				In 1975, Barrie Gilbert coined the world translinear to describe a class of circuits whose behaviour hinges on the extraordinarily
				precise exponential current-voltage characteristic.
				Gilbert enunciated a general circuit principle the TLP.
				</p>
				<p>
				The translinear principle is essentially a tranlation through the expoential current.
				voltage relationship of alinear constraint on the voltages in a circuit into a
				product-of-power law constraint on collector currents flowing in the circuit.
				</p>
				<p>
				Robert Adams in 1979 proposed a method of implementing large-signal-linear, continuous-time filters using
				linear capacitors, constant current soruces, and tranlinear devices, wich he called log-domain filtering,
				because all of the filtering occurred on log-compressed voltage state variables using
				translinear devices.
				</p>
				<p>
				Seevinch in 1990 presented a first-order filter, which he dubbed a companding current mode integrator
				Dough Frey in 1993 introduced a general method for synthesisizing
				log-domain filters of arbitrary order using a state-space approach and he presented a highly modular 
				technique for implementing such filters.

				Jan Mulder coinded the prhrase dynamic translinear circuits and have made the clearest connection
				between translinear circuits an log-domain filters.
				</p>

				<h2>The Ideal Translinear Element</h2>
				We shall assume that the ideal TE produces a collector current, I, that is exponential in its gat-to-emitter voltge V.
				<div ><img class="normal_img"  src="http://www.raig.cat/collector_obert/pfc/imatges/collector_current.jpg"/></div>
				We can calculate its transconductance by simply differentiating Eq.1 with respect to V to obtain.
				<div ><div ><img class="normal_img"  src="http://www.raig.cat/collector_obert/pfc/imatges/transconductance.jpg"/></div>
				The Figure shows a circuit symbol for an ideal translinear element (TE).
				<div ><img class="normal_img"  src="http://www.raig.cat/collector_obert/pfc/imatges/translinear_elements.jpg"/></div>
				
				<h2>4. The Translinear Principle</h2>
				
				<div ><img class="normal_img"  src="http://www.raig.cat/collector_obert/pfc/imatges/two_translinear_loop_circuits.jpg"/></div>
				</p>
				<a href="http://www.raig.cat/collector_obert/microelectronica/translinear_principle/translinear_principle.html">The Translinear Principle</a>
				<a name="goals"></a>
				<h3>Goals to achieve</h3>
				<p>One goal it could be substitute capacitor for transisitor to reduce space in the integrated
				circuit.
				Make an analysis of the RTC to know the complet behavour.
				</p>
				<hr/>
				<a name="study_of_circuit"></a>
				<h2>Study of the circuit ( <a href="#ref9"> Ref.9 </a>)</h2>
				<p>
				At the beginint the high band translineal element was designed with the goal of obtain a wide high band for using
				in application such as multipliers or logarithmitc domain filters of high frequencies.
				In the figure it shows a High Precision Translinear Element, it has three terminals Gate, Emitter and Collector.
				<p>
				The transistors M5, M1, M2, M7 form a translineal loop, where M1 is the output element.
				</p>
				<p>
				The function principle is
				to create a distortion in the gate of the M1 transistor as when it goes in the inversion region and strong region,
				the loss of transconductance was compensate by the distortion and the proportion between the polarization
				current is bear, as in the weak  inversion.
				</p>
				<p>
				The M2 is used to perform de predistortion  and correct the new
				caracteristic curve of the M1 transistor.
				</p>
				<p>
				M7 is used as a voltage follower to set the gate voltage in the M2 
				transistor.
				</p>
				<p>
				The current generated by the reference ransistor M2 is injected to the folower M5 through the current 
				mirror formed by M3 and M4 and the output voltage of the follower it is used to set the gate voltage in
				the output voltage M1.
				</p>
				The  <a href="http://www.raig.cat/collector_obert/microelectronica/current_mirror/current_mirror.html">mirror currents</a> formad by M6, M10 and M8, M9 are biassing M5 and M7 respectively.
				The transistors M11, M12 and M13, acheive than the current of the collector was equal to the
				emitter of tranlineal element as they copy and absorb the current of M2.


				
				
				
				<div ><img class="normal_img"  src="http://www.raig.cat/collector_obert/pfc/imatges/esquema_hpte.jpg"/></div>
				
				<div ><img class="normal_img"  src="http://www.raig.cat/collector_obert/pfc/imatges/block_diagram_basic.png"/></div>
				<div ><img class="normal_img"  src="http://www.raig.cat/collector_obert/pfc/imatges/block_diagram_detailed.png"/></div>
				
				
				<div ><img class="normal_img"  src="http://www.raig.cat/collector_obert/pfc/imatges/circuit_translineal.jpg"/></div>
				<div ><img class="normal_img"  src="http://www.raig.cat/collector_obert/pfc/imatges/simulacio_del_circuit_translineal_no_logaritmic.jpg"/></div>
				<div ><img class="normal_img"  src="http://www.raig.cat/collector_obert/pfc/imatges/simulacio_del_circuit_translineal.jpg"/></div>
				
				If we exam the simulation of the translilean circuit we will see that the response  has two slopes. One from
				1e-9 to  2e-7 and 2e-7 to 1e-4.
				Then we areg going to change the values of the polaritzation current and the aspect ratio from the transistors.
				To change to logarithmic view in cadence you should double-click the axis that you want to chance, and then
				appears a dialog where you can change to logarithmic view. It's a little difficult because it's easy to double 
				click the graph prooperties instead axis properties.
				<div ><img class="normal_img"  src="http://www.raig.cat/collector_obert/pfc/imatges/axis_properties.jpg"/></div>
				</p>
				<p>Returning to our goals we can divide the inversion region in weak, moderated and strong.
				We have two different equations for the weak-inversion region and the strong inversion-region.</p>
				<table>
					<tr>
						<td>
							<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/imatges/nmos_equations_weak_strong_inversion.jpg"/>
						</td>
					</tr>
					<tr>
						<td>
							Equations for weak inversion transistor and strong inversion transistor for a nmos transistor( <a href="#ref9"> Ref.9 </a> )
						</td>
					</tr>
				</table>
				<p>And also we have the same equations for our circuit</p>
				<table>
					<tr>
						<td>
							<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/imatges/hpte_equations_weak_strong_inversion.jpg"/>
						</td>
					</tr>
					<tr>
						<td>
							Equations for weak inversion transistor and strong inversion transistor for a hpte transistor( <a href="#ref9"> Ref.9 </a>)
						</td>
					</tr>
				</table>
				<p>Modifying this parameters we can adjust the slopes of the graphics</p>
				<table>
					<tr>
						<td>
							<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/imatges/hpte_graficas_de_ajuste_del_hbte.jpg"/>
						</td>
					</tr>
					<tr>
						<td>
							Graphic slope IC-VG and the effect of modifying parameters(<a href="#ref9"> Ref.9 </a>)
						</td>
					</tr>
				</table>
				
				<table>
					<tr>
						<td>
							<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/imatges/simulacio_del_circuit_normal_vs_translineal.jpg"/>
						</td>
					</tr>
					<tr>
						<td>
							Graphic nmos transistor vs hbte transistor( <a href="#ref9"> Ref.9 </a> )
						</td>
					</tr>
				</table>
				<p>We can observe different things between the two graphs.</p>
				First of all, the ranges of the x-axis are different, the npn transistor range is 10-5 to 10-3 values, instead
				the range of the hpbte transistor starts in 10-10 and ends in 10-3. Another important differences are:
				<ol>
					<li>Npn transistor has negative current values, hpbt no.</li>
					<li>The dinamic range where we can operater is greater in hpbt than npn transistor </li>
					<li>The value where we can operate is grater in bpbt, this means we lose the advantage
					os using low voltages.</li>
					
				</ol>
				
				<p>We are working in the slopes of the hpbt transistor, we want to improve the behavour. We can 
				look at point 500mV.
				<table>
					<tr>
						<td>
							<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/imatges/simulacio_hjbte_detall_del_canvi_rampes.jpg"/>
						</td>
					</tr>
					<tr>
						<td>
							Graphic hbte differences in slopes.
						</td>
					</tr>
				</table>
				Some values of this fragment of the graphics are:
				<table border="1">
					<tr>
						<td>V
						</td>
						<td>Ic
						</td>
					</tr>
					<tr>
						<td>480mv
						</td>
						<td>15.314nA
						</td>
					</tr>
					<tr>
						<td>489.91mV
						</td>
						<td>20.936nA
						</td>
					</tr>
					<tr>
						<td>505,04mV
						</td>
						<td>44.674nA
						</td>
					</tr>
					<tr>
						<td>510,00mV
						</td>
						<td>69.936nA
						</td>
					</tr>
					
				</table>
				<p>If we read in ( <a href="#ref11"> Ref.11 </a>) we can find out wich parameters we should modify for change beavour.
					<table>
					<tr>
						<td>
							<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/imatges/hbte_parametres_per_canviar_les_pendents.jpg"/>
						</td>
					</tr>
					<tr>
						<td>
							Parameters for changing the slopes and beaviour of hbte.
						</td>
					</tr>
				</table>
				<p>Acording the values of the table if we change I01 it will affect the two slopes. Instead
				if we change I05 we displacement of the slope to the left.But, How we can change I05?
				Here is the equation for I5. It depends on I05.
				
				<p>If we read in (Ref 11) we can find out wich parameters we should modify for change beavour.
				<table>
					<tr>
						<td>
							<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/imatges/hbte_i5.jpg"/>
						</td>
					</tr>
					<tr>
						<td>
							Equation for I5
						</td>
					</tr>
				</table>
				<p>To calculate I05 we can use 
				<table>
					<tr>
						<td>
							<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/imatges/reverse_current_saturation.jpg"/>
						</td>
					</tr>
					<tr>
						<td>
							Ref 12 : Reverse saturation Current 
						</td>
					</tr>
				</table>
				The reverse saturation current if Vd is  negative ID= -Is, sometime is considered 0, the typical value 
				is 10-5 A. We can see that Is depends on the material and the geometry.
				<table>
					<tr>
						<td>
							<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/imatges/simulation_i1_100n_i2_100n_M5_5nf_M7_7nf.jpg"/>
						</td>
					</tr>
					<tr>
						<td>
							Trying to modify slopes. Now the slopes are working with low Voltage values, and also the range
							from 	10-8 to 10-4 is more lineal.
						</td>
					</tr>
				</table>
				<table>
					<tr>
						<td>
							<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/imatges/simulacio_del_circuit_translineal_001_05.jpg"/>
						</td>
					</tr>
					<tr>
						<td>
							Now we have increased the number of points of the simulation, and we are increasing the value of vds in
							steps of 0.001 form 0 to 0.5 V. The other simulations were made with steps of 0.1 and from 0 to 2V.
						</td>
					</tr>
				</table>
				
				<table>
					<tr>
						<td>
							<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/imatges/simulacio_W7_1-8_W5_1-8.jpg"/>
						</td>
					</tr>
					<tr>
						<td>
							We are making a two parameter simulation with the width of M5 and M7 from 1 to 8.
						</td>
					</tr>
				</table>
				
				<table>
					<tr>
						<td>
							<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/imatges/simulacio_translineal_W5_1_8.jpg"/>
						</td>
					</tr>
					<tr>
						<td>
							One parameter simulation with the width of M5 from 1 to 8.
						</td>
					</tr>
				</table>
				
				
				<table>
					<tr>
						<td>
							<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/imatges/simulacio_translineal_i1_100n_1u.jpg"/>
						</td>
					</tr>
					<tr>
						<td>
							One parameter simulation with the width of I1  from 100nA to 1uA.
						</td>
					</tr>
				</table>
				<table>
					<tr>
						<td>
							<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/imatges/simulacio_i2_4.6u.jpg"/>
						</td>
					</tr>
					<tr>
						<td>
							One parameter simulation with the width of I2 4.6uA, I1 3u, W5=2  from 100nA to 1uA.
						</td>
					</tr>
				</table>
				<p>A continuació adjunto una serie de simulacions amb els paràmetres</p>
				
				
				
				
				<table>
					<tr>
						<td>
							<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/imatges/simulacio_1.jpg"/>
						</td>
					</tr>
					<tr>
						<td>
							Simulacio 1
						</td>
					</tr>
				</table>
				
				<table>
					<tr>
						<td>
							<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/imatges/simulacio_2.jpg"/>
						</td>
					</tr>
					<tr>
						<td>
								Simulacio 2
						</td>
					</tr>
				</table>
				
				
				<table>
					<tr>
						<td>
							<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/imatges/simulacio_3.jpg"/>
						</td>
					</tr>
					<tr>
						<td>
								Simulacio 3
						</td>
					</tr>
				</table>
				
				
				<table>
					<tr>
						<td>
							<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/imatges/simulacio_4.jpg"/>
						</td>
					</tr>
					<tr>
						<td>
							Simulacio 4
						</td>
					</tr>
				</table>
				
				<table>
					<tr>
						<td>
							<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/simulation_csv/taula_regressio_lineal.jpg"/>
						</td>
					</tr>
					<tr>
						<td>
							Values to realize thre regression, without some points.
						</td>
					</tr>
				</table>
				
				
				<table>
					<tr>
						<td>
							<img class="normal_img" src="http://www.raig.cat/collector_obert/pfc/simulation_csv/regressio_lineal.jpg"/>
						</td>
					</tr>
					<tr>
						<td>
							Regression.
						</td>
					</tr>
				</table>
				
				
				
				
				
				
				
				
				
				
				<a name="bibliografia"></a>
				<h3>Bibliograf&iacute;a</h3>
				<p>Daniel Fern&aacute;ndez , Jordi Madrenas &#147;Exponencial-Enhanced Characteristic Of Mos Transistors and its Application to Log-Domain Circuits&#147;</p>
				
				<p>Bradley A.Minch &#147;Analysis and Synthesis of Static Translinear Circuits&#147;</p>
				<a name="ref9"></a>
				<p>Ref 9: Modelado de sistemas reconfigurables en señal mixta y arquitecturas con elementos translineales. Luis Arturo Martínez Alvarado</p>
				<a name="ref10"></a><p>Ref 10 : Circuits i dispositius electrònics Fonaments d'electrònica </p>
				<a name="ref11"></a><p>Ref 11 : Arquitecturas y circuitos CMOS para el control,generación y procesado de señal de MEMS </p>
				<p>Ref 12 : Dispositius electr&oacute;nics i fot&oacute;nics</p>
				<p>Ref 13 : Analysis and Design of Analog Integrated Circuits. Gray. Hurst. Lewis. Meyer</p>
				<p>Ref 14 : Funamentos de dise–o microelectr—nico </p>
				<h3>Links d'interes</h3>
				<a class="a_links_interes" target = "_blank" href="http://web.mit.edu/6.012/www/">"Ref 13 :Microelectronic Devices and Circuits del MIT"</a>
				<a class="a_links_interes" target = "_blank" href="http://nptel.iitm.ac.in/video.php?subjectId=117106093">Ref 14 :VLSI Technology - video</a>
				<a class="a_links_interes" target = "_blank" href="http://www.youtube.com/watch?v=R4KxlqsuZ0A">Ref 15 :MIT -video</a>
				<a class="a_links_interes" target = "_blank" href="http://www.eng.yale.edu/pjk/eesrproj_02/luckenbill_html/node5.html"> Ref 16 :Subthreshold</a>				
				<h3>Bibliografia extra</h3>
				<p>Circuits and Systems Tutorials</p>
				
			</div>
		</div>	
	</body>
</html>

