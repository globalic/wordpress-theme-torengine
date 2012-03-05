<?php 
/*
 * TorEngine (Wordpress Theme)
 *   Copyright (C) 2011  PTKDev
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *  
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *  
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
*/
?>

	<div id="content">	
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="sidebar_line">
				<div class="sidebar_txt">
					&nbsp;&nbsp;<a class="menu" href="<?php the_permalink() ?>"><?php the_title(); ?></a>&nbsp;&nbsp;
				</div>
				<div class="height4"></div>
			</div>
			<div class="post_separator"> <hr /></div>
			<?php the_content(); ?>
		<?php endwhile; else: endif; ?>	
		<table class="width">
			<tr>
				<td class="clear_center">
					<?php if(!is_single()) { ?>
						<div class="switch_page"><?php posts_nav_link(' | ','&laquo; Pagina Precedente','Pagina Successiva &raquo;'); ?> </div><br />
					<?php }?>
				</td>
			</tr>
		</table>
	<div class="clear"></div>
		<div class="sidebar_line">
			<div class="sidebar_txt">
				&nbsp;&nbsp;<a class="menu" href="javascript:void(0);">Appunti</a>&nbsp;&nbsp;
			</div>
			<div class="height4"></div>
		</div>
		<div class="post_separator"> <hr /></div>
		<p>
			&raquo; <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/geometria/">Geometria</a><br /><br />
			&raquo; <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/algebra-e-logica/">Algebra E Logica</a><br /><br />
			&raquo; <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/analisi-1/">Analisi 1</a><br /><br />
			&raquo; <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/analisi-2/">Analisi 2</a><br /><br />
			&raquo; <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/fisica-1/">Fisica 1</a><br /><br />
			&raquo; <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/chimica/">Chimica</a><br /><br />
			&raquo; <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/economia/">Economia</a><br /><br />
			&raquo; <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/informatica-cpp/">Informatica (C++)</a><br /><br />
		</p><br />
		
		<div class="sidebar_line">
			<div class="sidebar_txt">
				&nbsp;&nbsp;<a class="menu" href="javascript:void(0);">Come Aiutare</a>&nbsp;&nbsp;
			</div>
			<div class="height4"></div>
		</div>
		<div class="post_separator"> <hr /></div>
		<p>
			&raquo; <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/faq-google-docs/">Google Docs</a><br /><br />
			&raquo; <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/faq-scrivere-appunti/">Scrivere Appunti</a><br /><br />
			&raquo; <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/faq-risolvere-esercizi/">Risolvere Esercizi</a><br /><br />
		</p><br />
		
		<div class="sidebar_line">
			<div class="sidebar_txt">
				&nbsp;&nbsp;<a class="menu" href="javascript:void(0);">Deposito File</a>&nbsp;&nbsp;
			</div>
			<div class="height4"></div>
		</div>
		<div class="post_separator"> <hr /></div>
		<p>
			&raquo; <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/openftp/">OpenFTP</a><br /><br />
		</p>
	</div>