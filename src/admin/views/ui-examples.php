<div class="wrap">
    <h1>My Plugin</h1>
    <table class="wp-list-table widefat fixed striped posts" id="productos">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>aaa</td>
                <td>bbbb</td>
                <td>ddd</td>
                <td>cccc</td>
            </tr>
            <tr>
                <td>aaa</td>
                <td>bbbb</td>
                <td>ddd</td>
                <td>cccc</td>
            </tr>
            <tr>
                <td>aaa</td>
                <td>bbbb</td>
                <td>ddd</td>
                <td>cccc</td>
            </tr>
            <tr>
                <td>aaa</td>
                <td>bbbb</td>
                <td>ddd</td>
                <td>cccc</td>
            </tr>
        </tbody>
    </table>
</div>


<div class="widget">
    <h2 class="widget-title">Formulario de contacto</h2>
    <form class="form-widget">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" class="form-control">
        <label for="email">Email:</label>
        <input type="email" id="email" class="form-control">
        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" class="form-control"></textarea>
        <input type="submit" value="Enviar" class="button button-primary">
    </form>
</div>


<table class="wp-list-table widefat fixed striped">
    <thead>
        <tr>
            <th scope="col" class="manage-column">Nombre</th>
            <th scope="col" class="manage-column">Email</th>
            <th scope="col" class="manage-column">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Juan</td>
            <td>juan@ejemplo.com</td>
            <td>
                <a href="#" class="button button-primary">Editar</a>
                <a href="#" class="button button-secondary">Eliminar</a>
            </td>
        </tr>
        <tr>
            <td>Maria</td>
            <td>maria@ejemplo.com</td>
            <td>
                <a href="#" class="button button-primary">Editar</a>
                <a href="#" class="button button-secondary">Eliminar</a>
            </td>
        </tr>
    </tbody>
</table>



<div class="wrap">
    <h1 class="wp-heading-inline">
        Add New Slide</h1>


    <hr class="wp-header-end">
    <div id="lost-connection-notice" class="error hidden">
        <p><span class="spinner"></span> <strong>Conexión perdida.</strong> El guardado ha sido desactivado hasta que vuelvas a conectar. <span class="hide-if-no-sessionstorage">Esta entrada se está guardando también en tu navegador, por si acaso.</span>
        </p>
    </div>
    <div id="local-storage-notice" class="hidden notice is-dismissible">
        <p class="local-restore">
            La copia de seguridad de esta entrada de tu navegador es diferente de la versión que hay en la parte inferior. <button type="button" class="button restore-backup">Restaurar la copia de seguridad.</button>
        </p>
        <p class="help">
            Esto reemplazará el contenido actual del editor con la última versión de la copia de seguridad. Puedes usar deshacer o rehacer en el editor para recuperar el viejo contenido o volver a la versión restaurada. </p>
        <button type="button" class="notice-dismiss"><span class="screen-reader-text">Descartar este aviso.</span></button>
    </div>


    <form name="post" action="post.php" method="post" id="post" data-bitwarden-watching="1">
        <input type="hidden" id="_wpnonce" name="_wpnonce" value="431ebdc691"><input type="hidden" name="_wp_http_referer" value="/curso-wp-plugin/wp-admin/post-new.php?post_type=slide"><input type="hidden" id="user-id" name="user_ID" value="1">
        <input type="hidden" id="hiddenaction" name="action" value="editpost">
        <input type="hidden" id="originalaction" name="originalaction" value="editpost">
        <input type="hidden" id="post_author" name="post_author" value="1">
        <input type="hidden" id="post_type" name="post_type" value="slide">
        <input type="hidden" id="original_post_status" name="original_post_status" value="auto-draft">
        <input type="hidden" id="referredby" name="referredby" value="http://localhost/curso-wp-plugin/wp-admin/edit.php?post_type=slide">
        <input type="hidden" name="_wp_original_http_referer" value="http://localhost/curso-wp-plugin/wp-admin/edit.php?post_type=slide"><input type="hidden" id="auto_draft" name="auto_draft" value="1"><input type="hidden" id="post_ID" name="post_ID" value="96"><input type="hidden" id="meta-box-order-nonce" name="meta-box-order-nonce" value="680a6cdd5d"><input type="hidden" id="closedpostboxesnonce" name="closedpostboxesnonce" value="53de9ed9b3">

        <div id="poststuff">
            <div id="post-body" class="metabox-holder columns-2">
                <div id="post-body-content">

                    <div id="titlediv">
                        <div id="titlewrap">
                            <label class="" id="title-prompt-text" for="title">Añadir título</label>
                            <input type="text" name="post_title" size="30" value="" id="title" spellcheck="true" autocomplete="off">
                        </div>
                        <div class="inside">
                        </div>
                        <input type="hidden" id="samplepermalinknonce" name="samplepermalinknonce" value="9b4653d521">
                    </div><!-- /titlediv -->
                </div><!-- /post-body-content -->

                <div id="postbox-container-1" class="postbox-container">
                    <div id="side-sortables" class="meta-box-sortables ui-sortable">
                        <div id="ml_box" class="postbox ">
                            <div class="postbox-header">
                                <h2 class="hndle ui-sortable-handle">Idiomas</h2>
                                <div class="handle-actions hide-if-no-js"><button type="button" class="handle-order-higher" aria-disabled="true" aria-describedby="ml_box-handle-order-higher-description"><span class="screen-reader-text">Subir</span><span class="order-higher-indicator" aria-hidden="true"></span></button><span class="hidden" id="ml_box-handle-order-higher-description">Mueve la caja Idiomas hacia arriba</span><button type="button" class="handle-order-lower" aria-disabled="false" aria-describedby="ml_box-handle-order-lower-description"><span class="screen-reader-text">Bajar</span><span class="order-lower-indicator" aria-hidden="true"></span></button><span class="hidden" id="ml_box-handle-order-lower-description">Mueve la caja Idiomas hacia abajo</span><button type="button" class="handlediv" aria-expanded="true"><span class="screen-reader-text">Alternar panel: Idiomas</span><span class="toggle-indicator" aria-hidden="true"></span></button></div>
                            </div>
                            <div class="inside">
                                <input type="hidden" id="_pll_nonce" name="_pll_nonce" value="ec97c03762"><input type="hidden" name="_wp_http_referer" value="/curso-wp-plugin/wp-admin/post-new.php?post_type=slide">
                                <p><strong>Idioma</strong></p>
                                <label class="screen-reader-text" for="post_lang_choice">Idioma</label>
                                <div id="select-post-language"><span class="pll-select-flag"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAflBMVEUAXgnp6ejj49zOAADGAACBvZl+u5Z2t4/9/f36+vrnZ2tmrYNdqXv29vbjR03fQkjjWFy4AABVpHba0LzfOD5PoXHg1sXHsIyDXjzSxq8AUQCrtaONfWn08fHbLTPgTVBInWudrZk7lmHYIymvAAAAQwAANwAAJQDU1NTKxMQZpDQjAAAAaklEQVR4ATXItUEEUAAFsLxvuDc4+2+Fu0ODnFSXMgGBRIguWQS/0YdMZqJFkiIyWFttkk4jqs1kfHcohzG059YetlndUhh1zYF+ZnUVhbpW3A4X6O97be1jDevP1nRoPGUAz9ByFAJZgjmA3Q34KhcIQAAAAABJRU5ErkJggg==" alt="Español" width="16" height="11" style="width: 16px; height: 11px;"></span><select name="post_lang_choice" id="post_lang_choice" class="post_lang_choice tags-input" data-old-value="es">
                                        <option value="es" lang="es_MX" selected="selected">Español</option>
                                        <option value="en" lang="en_US">English</option>

                                    </select>
                                </div>
                                <div id="post-translations" class="translations">
                                    <p><strong>Traducciones</strong></p>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th class="pll-language-column"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAmVBMVEViZsViZMJiYrf9gnL8eWrlYkjgYkjZYkj8/PujwPybvPz4+PetraBEgfo+fvo3efkydfkqcvj8Y2T8UlL8Q0P8MzP9k4Hz8/Lu7u4DdPj9/VrKysI9fPoDc/EAZ7z7IiLHYkjp6ekCcOTk5OIASbfY/v21takAJrT5Dg6sYkjc3Nn94t2RkYD+y8KeYkjs/v7l5fz0dF22YkjWvcOLAAAAgElEQVR4AR2KNULFQBgGZ5J13KGGKvc/Cw1uPe62eb9+Jr1EUBFHSgxxjP2Eca6AfUSfVlUfBvm1Ui1bqafctqMndNkXpb01h5TLx4b6TIXgwOCHfjv+/Pz+5vPRw7txGWT2h6yO0/GaYltIp5PT1dEpLNPL/SdWjYjAAZtvRPgHJX4Xio+DSrkAAAAASUVORK5CYII=" alt="English" width="16" height="11" style="width: 16px; height: 11px;"></th>
                                                <td class="hidden"><a href="http://localhost/curso-wp-plugin/wp-admin/post-new.php?post_type=slide&amp;from_post=96&amp;new_lang=en&amp;_wpnonce=5992954a2f" title="Añadir una traducción en English" class="pll_icon_add"><span class="screen-reader-text">Añadir una traducción en English</span></a></td>
                                                <td class="pll-edit-column pll-column-icon"><a href="http://localhost/curso-wp-plugin/wp-admin/post-new.php?post_type=slide&amp;from_post=96&amp;new_lang=en&amp;_wpnonce=5992954a2f" title="Añadir una traducción en English" class="pll_icon_add"><span class="screen-reader-text">Añadir una traducción en English</span></a></td>
                                                <td class="pll-translation-column">
                                                    <label class="screen-reader-text" for="tr_lang_en">traduccion</label>
                                                    <input type="hidden" name="post_tr_lang[en]" id="htr_lang_en" value="0">
                                                    <span lang="en-US" dir="ltr"><input type="text" class="tr_lang ui-autocomplete-input" id="tr_lang_en" value="" autocomplete="off"></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="submitdiv" class="postbox ">
                            <div class="postbox-header">
                                <h2 class="hndle ui-sortable-handle">Publicar</h2>
                                <div class="handle-actions hide-if-no-js"><button type="button" class="handle-order-higher" aria-disabled="false" aria-describedby="submitdiv-handle-order-higher-description"><span class="screen-reader-text">Subir</span><span class="order-higher-indicator" aria-hidden="true"></span></button><span class="hidden" id="submitdiv-handle-order-higher-description">Mueve la caja Publicar hacia arriba</span><button type="button" class="handle-order-lower" aria-disabled="false" aria-describedby="submitdiv-handle-order-lower-description"><span class="screen-reader-text">Bajar</span><span class="order-lower-indicator" aria-hidden="true"></span></button><span class="hidden" id="submitdiv-handle-order-lower-description">Mueve la caja Publicar hacia abajo</span><button type="button" class="handlediv" aria-expanded="true"><span class="screen-reader-text">Alternar panel: Publicar</span><span class="toggle-indicator" aria-hidden="true"></span></button></div>
                            </div>
                            <div class="inside">
                                <div class="submitbox" id="submitpost">

                                    <div id="minor-publishing">

                                        <div style="display:none;">
                                            <p class="submit"><input type="submit" name="save" id="save" class="button" value="Guardar"></p>
                                        </div>

                                        <div id="minor-publishing-actions">
                                            <div id="save-action">
                                                <input type="submit" name="save" id="save-post" value="Solo guardar" class="button">
                                                <span class="spinner"></span>
                                            </div>

                                            <div class="clear"></div>
                                        </div>

                                        <div id="misc-publishing-actions">
                                            <div class="misc-pub-section misc-pub-post-status">
                                                Estado: <span id="post-status-display">
                                                    Borrador </span>

                                                <a href="#post_status" class="edit-post-status hide-if-no-js" role="button"><span aria-hidden="true">Editar</span> <span class="screen-reader-text">Editar estado</span></a>

                                                <div id="post-status-select" class="hide-if-js">
                                                    <input type="hidden" name="hidden_post_status" id="hidden_post_status" value="draft">
                                                    <label for="post_status" class="screen-reader-text">Establecer estado</label>
                                                    <select name="post_status" id="post_status">
                                                        <option value="pending">Pendiente de revisión</option>
                                                        <option selected="selected" value="draft">Borrador</option>
                                                    </select>
                                                    <a href="#post_status" class="save-post-status hide-if-no-js button">Aceptar</a>
                                                    <a href="#post_status" class="cancel-post-status hide-if-no-js button-cancel">Cancelar</a>
                                                </div>
                                            </div>

                                            <div class="misc-pub-section misc-pub-visibility" id="visibility">
                                                Visibilidad: <span id="post-visibility-display">
                                                    Público </span>

                                                <a href="#visibility" class="edit-visibility hide-if-no-js" role="button"><span aria-hidden="true">Editar</span> <span class="screen-reader-text">Editar visibilidad</span></a>

                                                <div id="post-visibility-select" class="hide-if-js">
                                                    <input type="hidden" name="hidden_post_password" id="hidden-post-password" value="">

                                                    <input type="hidden" name="hidden_post_visibility" id="hidden-post-visibility" value="public">
                                                    <input type="radio" name="visibility" id="visibility-radio-public" value="public" checked="checked"> <label for="visibility-radio-public" class="selectit">Público</label><br>


                                                    <input type="radio" name="visibility" id="visibility-radio-password" value="password"> <label for="visibility-radio-password" class="selectit">Protegida con contraseña</label><br>
                                                    <span id="password-span"><label for="post_password">Contraseña:</label> <input type="text" name="post_password" id="post_password" value="" maxlength="255"><br></span>

                                                    <input type="radio" name="visibility" id="visibility-radio-private" value="private"> <label for="visibility-radio-private" class="selectit">Privada</label><br>

                                                    <p>
                                                        <a href="#visibility" class="save-post-visibility hide-if-no-js button">Aceptar</a>
                                                        <a href="#visibility" class="cancel-post-visibility hide-if-no-js button-cancel">Cancelar</a>
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="misc-pub-section curtime misc-pub-curtime">
                                                <span id="timestamp">
                                                    Publicar <b>inmediatamente</b> </span>
                                                <a href="#edit_timestamp" class="edit-timestamp hide-if-no-js" role="button">
                                                    <span aria-hidden="true">Editar</span>
                                                    <span class="screen-reader-text">Editar fecha y hora</span>
                                                </a>
                                                <fieldset id="timestampdiv" class="hide-if-js">
                                                    <legend class="screen-reader-text">Fecha y hora</legend>
                                                    <div class="timestamp-wrap"><label><span class="screen-reader-text">Mes</span><select class="form-required" id="mm" name="mm">
                                                                <option value="01" data-text="Ene" selected="selected">01-Ene</option>
                                                                <option value="02" data-text="Feb">02-Feb</option>
                                                                <option value="03" data-text="Mar">03-Mar</option>
                                                                <option value="04" data-text="Abr">04-Abr</option>
                                                                <option value="05" data-text="May">05-May</option>
                                                                <option value="06" data-text="Jun">06-Jun</option>
                                                                <option value="07" data-text="Jul">07-Jul</option>
                                                                <option value="08" data-text="Ago">08-Ago</option>
                                                                <option value="09" data-text="Sep">09-Sep</option>
                                                                <option value="10" data-text="Oct">10-Oct</option>
                                                                <option value="11" data-text="Nov">11-Nov</option>
                                                                <option value="12" data-text="Dic">12-Dic</option>
                                                            </select></label> <label><span class="screen-reader-text">Día</span><input type="text" id="jj" name="jj" value="18" size="2" maxlength="2" autocomplete="off" class="form-required"></label>, <label><span class="screen-reader-text">Año</span><input type="text" id="aa" name="aa" value="2023" size="4" maxlength="4" autocomplete="off" class="form-required"></label> @ <label><span class="screen-reader-text">Hora</span><input type="text" id="hh" name="hh" value="17" size="2" maxlength="2" autocomplete="off" class="form-required"></label>:<label><span class="screen-reader-text">Minuto</span><input type="text" id="mn" name="mn" value="47" size="2" maxlength="2" autocomplete="off" class="form-required"></label></div><input type="hidden" id="ss" name="ss" value="11">

                                                    <input type="hidden" id="hidden_mm" name="hidden_mm" value="01">
                                                    <input type="hidden" id="cur_mm" name="cur_mm" value="01">
                                                    <input type="hidden" id="hidden_jj" name="hidden_jj" value="18">
                                                    <input type="hidden" id="cur_jj" name="cur_jj" value="18">
                                                    <input type="hidden" id="hidden_aa" name="hidden_aa" value="2023">
                                                    <input type="hidden" id="cur_aa" name="cur_aa" value="2023">
                                                    <input type="hidden" id="hidden_hh" name="hidden_hh" value="17">
                                                    <input type="hidden" id="cur_hh" name="cur_hh" value="17">
                                                    <input type="hidden" id="hidden_mn" name="hidden_mn" value="47">
                                                    <input type="hidden" id="cur_mn" name="cur_mn" value="47">

                                                    <p>
                                                        <a href="#edit_timestamp" class="save-timestamp hide-if-no-js button">Aceptar</a>
                                                        <a href="#edit_timestamp" class="cancel-timestamp hide-if-no-js button-cancel">Cancelar</a>
                                                    </p>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>

                                    <div id="major-publishing-actions">
                                        <div id="delete-action">
                                            <a class="submitdelete deletion" href="http://localhost/curso-wp-plugin/wp-admin/post.php?post=96&amp;action=trash&amp;_wpnonce=99bbf93ff7">Mover a la Papelera</a>
                                        </div>

                                        <div id="publishing-action">
                                            <span class="spinner"></span>
                                            <input name="original_publish" type="hidden" id="original_publish" value="Publicar">
                                            <input type="submit" name="publish" id="publish" class="button button-primary button-large" value="Publicar">
                                        </div>
                                        <div class="clear"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div id="slide-typesdiv" class="postbox ">
                            <div class="postbox-header">
                                <h2 class="hndle ui-sortable-handle">Slide categories</h2>
                                <div class="handle-actions hide-if-no-js"><button type="button" class="handle-order-higher" aria-disabled="false" aria-describedby="slide-typesdiv-handle-order-higher-description"><span class="screen-reader-text">Subir</span><span class="order-higher-indicator" aria-hidden="true"></span></button><span class="hidden" id="slide-typesdiv-handle-order-higher-description">Mueve la caja Slide categories hacia arriba</span><button type="button" class="handle-order-lower" aria-disabled="false" aria-describedby="slide-typesdiv-handle-order-lower-description"><span class="screen-reader-text">Bajar</span><span class="order-lower-indicator" aria-hidden="true"></span></button><span class="hidden" id="slide-typesdiv-handle-order-lower-description">Mueve la caja Slide categories hacia abajo</span><button type="button" class="handlediv" aria-expanded="true"><span class="screen-reader-text">Alternar panel: Slide categories</span><span class="toggle-indicator" aria-hidden="true"></span></button></div>
                            </div>
                            <div class="inside">
                                <div id="taxonomy-slide-types" class="categorydiv">
                                    <ul id="slide-types-tabs" class="category-tabs">
                                        <li class="tabs"><a href="#slide-types-all">Slide categories</a></li>
                                        <li class="hide-if-no-js"><a href="#slide-types-pop">Más utilizadas</a></li>
                                    </ul>

                                    <div id="slide-types-pop" class="tabs-panel" style="display: none;">
                                        <ul id="slide-typeschecklist-pop" class="categorychecklist form-no-clear">
                                        </ul>
                                    </div>

                                    <div id="slide-types-all" class="tabs-panel">
                                        <input type="hidden" name="tax_input[slide-types][]" value="0">
                                        <ul id="slide-typeschecklist" data-wp-lists="list:slide-types" class="categorychecklist form-no-clear">
                                        </ul>
                                    </div>
                                    <div id="slide-types-adder" class="wp-hidden-children">
                                        <a id="slide-types-add-toggle" href="#slide-types-add" class="hide-if-no-js taxonomy-add-new">
                                            + Añadir nueva categoría </a>
                                        <p id="slide-types-add" class="category-add wp-hidden-child">
                                            <label class="screen-reader-text" for="newslide-types">Añadir nueva categoría</label>
                                            <input type="text" name="newslide-types" id="newslide-types" class="form-required form-input-tip" value="Nombre de la nueva categoría" aria-required="true">
                                            <label class="screen-reader-text" for="newslide-types_parent">
                                                Categoría superior: </label>
                                            <select name="newslide-types_parent" id="newslide-types_parent" class="postform">
                                                <option value="-1" selected="selected">— Categoría superior —</option>
                                            </select>
                                            <input type="hidden" id="slide-types-lang" name="term_lang_choice" value="es"><input type="button" id="slide-types-add-submit" data-wp-lists="add:slide-typeschecklist:slide-types-add" class="button category-add-submit" value="Añadir nueva categoría">
                                            <input type="hidden" id="_ajax_nonce-add-slide-types" name="_ajax_nonce-add-slide-types" value="124405f10c"> <span id="slide-types-ajax-response"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="pageparentdiv" class="postbox ">
                            <div class="postbox-header">
                                <h2 class="hndle ui-sortable-handle">Atributos de entrada</h2>
                                <div class="handle-actions hide-if-no-js"><button type="button" class="handle-order-higher" aria-disabled="false" aria-describedby="pageparentdiv-handle-order-higher-description"><span class="screen-reader-text">Subir</span><span class="order-higher-indicator" aria-hidden="true"></span></button><span class="hidden" id="pageparentdiv-handle-order-higher-description">Mueve la caja Atributos de entrada hacia arriba</span><button type="button" class="handle-order-lower" aria-disabled="false" aria-describedby="pageparentdiv-handle-order-lower-description"><span class="screen-reader-text">Bajar</span><span class="order-lower-indicator" aria-hidden="true"></span></button><span class="hidden" id="pageparentdiv-handle-order-lower-description">Mueve la caja Atributos de entrada hacia abajo</span><button type="button" class="handlediv" aria-expanded="true"><span class="screen-reader-text">Alternar panel: Atributos de entrada</span><span class="toggle-indicator" aria-hidden="true"></span></button></div>
                            </div>
                            <div class="inside">
                                <p class="post-attributes-label-wrapper menu-order-label-wrapper"><label class="post-attributes-label" for="menu_order">Orden</label></p>
                                <input name="menu_order" type="text" size="4" id="menu_order" value="0">
                            </div>
                        </div>
                        <div id="slider_revolution_metabox" class="postbox ">
                            <div class="postbox-header">
                                <h2 class="hndle ui-sortable-handle">Slider Revolution</h2>
                                <div class="handle-actions hide-if-no-js"><button type="button" class="handle-order-higher" aria-disabled="false" aria-describedby="slider_revolution_metabox-handle-order-higher-description"><span class="screen-reader-text">Subir</span><span class="order-higher-indicator" aria-hidden="true"></span></button><span class="hidden" id="slider_revolution_metabox-handle-order-higher-description">Mueve la caja Slider Revolution hacia arriba</span><button type="button" class="handle-order-lower" aria-disabled="false" aria-describedby="slider_revolution_metabox-handle-order-lower-description"><span class="screen-reader-text">Bajar</span><span class="order-lower-indicator" aria-hidden="true"></span></button><span class="hidden" id="slider_revolution_metabox-handle-order-lower-description">Mueve la caja Slider Revolution hacia abajo</span><button type="button" class="handlediv" aria-expanded="true"><span class="screen-reader-text">Alternar panel: Slider Revolution</span><span class="toggle-indicator" aria-hidden="true"></span></button></div>
                            </div>
                            <div class="inside">
                                <ul class="revslider_settings _TPRB_">
                                    <li id="slide_template_row" style="display: inline-block;">
                                        <label class="rs_wp_ppset" for="revslider_blank_template">Blank Template</label>
                                        <div class="tponoffwrap off">
                                            <div class="tponoff_inner">
                                                <div class="tponoff_off">Off</div>
                                                <div class="tponoff_on">On<input id="rs_blank_template" name="rs_blank_template" class=" tponoff" type="checkbox"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li id="slide_template_row">
                                        <div id="rs_page_bg_color_column" class="" style="display:none;">
                                            <label class="rs_wp_ppset">Page Color</label>
                                            <div class="revbuilder-colorpicker revbuilder-cpicker-master-wrap"><span class="revbuilder-colorbox" style="background: rgb(255, 255, 255);"></span><span class="revbuilder-colorbtn">Color</span><input type="text" data-editing="Background Color" name="rs_page_bg_color" id="rs_page_bg_color" class="my-color-field revbuilder-cpicker-component" value="" data-color="#ffffff" style="display: none;"><input type="text" class="layerinput" value="#ffffff"></div>
                                        </div>
                                        <div class="clear"></div>
                                    </li>
                                    <li id="slide_template_row">
                                        <label class="rs_wp_ppset" id="slide_template_text">Slide Template</label><select style="max-width:82px" name="slide_template" id="slide_template">
                                            selected='selected'<option selected="selected" value="default">default</option></select>
                                    </li>
                                    <li id="slide_template_row" style="margin-top:40px">
                                        <solidiconbox><i class="material-icons">flag</i></solidiconbox>
                                        <div class="pli_twoline_wp">
                                            <div class="pli_subtitle">Installed Version</div>
                                            <div class="dynamicval pli_subtitle">6.6.7</div>
                                        </div>
                                        <div class="div5"></div>
                                        <solidiconbox id="available_version_icon"><i class="material-icons">cloud_download</i></solidiconbox>
                                        <div id="available_version_content" class="pli_twoline_wp">
                                            <div class="pli_subtitle">Available Version</div>
                                            <div class="available_latest_version dynamicval pli_subtitle">6.6.8</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rs_wp_plg_act_wrapper" style="display: block;"><span>Unlock All Features</span></div>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div id="postimagediv" class="postbox ">
                            <div class="postbox-header">
                                <h2 class="hndle ui-sortable-handle">Imagen destacada</h2>
                                <div class="handle-actions hide-if-no-js"><button type="button" class="handle-order-higher" aria-disabled="false" aria-describedby="postimagediv-handle-order-higher-description"><span class="screen-reader-text">Subir</span><span class="order-higher-indicator" aria-hidden="true"></span></button><span class="hidden" id="postimagediv-handle-order-higher-description">Mueve la caja Imagen destacada hacia arriba</span><button type="button" class="handle-order-lower" aria-disabled="false" aria-describedby="postimagediv-handle-order-lower-description"><span class="screen-reader-text">Bajar</span><span class="order-lower-indicator" aria-hidden="true"></span></button><span class="hidden" id="postimagediv-handle-order-lower-description">Mueve la caja Imagen destacada hacia abajo</span><button type="button" class="handlediv" aria-expanded="true"><span class="screen-reader-text">Alternar panel: Imagen destacada</span><span class="toggle-indicator" aria-hidden="true"></span></button></div>
                            </div>
                            <div class="inside">
                                <p class="hide-if-no-js"><a href="http://localhost/curso-wp-plugin/wp-admin/media-upload.php?post_id=96&amp;type=image&amp;TB_iframe=1&amp;width=753&amp;height=641" id="set-post-thumbnail" class="thickbox">Establecer imagen destacada</a></p><input type="hidden" id="_thumbnail_id" name="_thumbnail_id" value="-1">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="postbox-container-2" class="postbox-container">
                    <div id="normal-sortables" class="meta-box-sortables ui-sortable">
                        <div id="mfn-meta-slide" class="postbox ">
                            <div class="postbox-header">
                                <h2 class="hndle ui-sortable-handle">Slide Options</h2>
                                <div class="handle-actions hide-if-no-js"><button type="button" class="handle-order-higher" aria-disabled="false" aria-describedby="mfn-meta-slide-handle-order-higher-description"><span class="screen-reader-text">Subir</span><span class="order-higher-indicator" aria-hidden="true"></span></button><span class="hidden" id="mfn-meta-slide-handle-order-higher-description">Mueve la caja Slide Options hacia arriba</span><button type="button" class="handle-order-lower" aria-disabled="false" aria-describedby="mfn-meta-slide-handle-order-lower-description"><span class="screen-reader-text">Bajar</span><span class="order-lower-indicator" aria-hidden="true"></span></button><span class="hidden" id="mfn-meta-slide-handle-order-lower-description">Mueve la caja Slide Options hacia abajo</span><button type="button" class="handlediv" aria-expanded="true"><span class="screen-reader-text">Alternar panel: Slide Options</span><span class="toggle-indicator" aria-hidden="true"></span></button></div>
                            </div>
                            <div class="inside">
                                <input type="hidden" name="mfn-builder-nonce" value="f0809aebbd">
                                <div class="mfn-ui mfn-meta">
                                    <div class="mfn-meta-wrapper">
                                        <div class="mfn-form">
                                            <div class="mfn-form-row mfn-row ">
                                                <div class="row-column row-column-2"><label class="form-label">Featured image</label></div>
                                                <div class="row-column row-column-10">
                                                    <div class="form-content ">
                                                        <div class="desc-group">recommended image size: <b>&nbsp;1630px x 860px</b></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mfn-form-row mfn-row ">
                                                <div class="row-column row-column-2"><label class="form-label">Link</label></div>
                                                <div class="row-column row-column-10">
                                                    <div class="form-content ">
                                                        <div class="form-group">
                                                            <div class="form-control"><input class="mfn-field-value mfn-form-control mfn-form-input " type="text" name="mfn-post-link" value="" placeholder=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mfn-form-row mfn-row ">
                                                <div class="row-column row-column-2"><label class="form-label">Link target</label></div>
                                                <div class="row-column row-column-10">
                                                    <div class="form-content ">
                                                        <div class="form-group segmented-options single-segmented-option checkboxes-list">
                                                            <div class="form-control">
                                                                <ul class="">
                                                                    <li class="active">
                                                                        <fieldset><input type="checkbox" name="mfn-post-target" value="0" checked="checked" autocomplete="off"><a href="#"><span class="text">Same window</span></a></fieldset>
                                                                    </li>
                                                                    <li class="">
                                                                        <fieldset><input type="checkbox" name="mfn-post-target" value="1" autocomplete="off"><a href="#"><span class="text">New window</span></a></fieldset>
                                                                    </li>
                                                                    <li class="">
                                                                        <fieldset><input type="checkbox" name="mfn-post-target" value="lightbox" autocomplete="off"><a href="#"><span class="text">Lightbox image</span></a></fieldset>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mfn-form-row mfn-row form-content-full-width">
                                                <div class="row-column row-column-2"><label class="form-label">Description</label></div>
                                                <div class="row-column row-column-10">
                                                    <div class="form-content form-content-full-width">
                                                        <div class="form-group ">
                                                            <div class="form-control">
                                                                <div class="editor-content"><textarea class="mfn-form-control mfn-field-value mfn-form-textarea " name="mfn-post-desc" rows="4" placeholder=""></textarea></div>
                                                            </div>
                                                        </div>
                                                        <div class="desc-group"><span class="description">for Slider Style: Image &amp; Text</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="mfn-meta-placeholder" class="postbox ">
                            <div class="postbox-header">
                                <h2 class="hndle ui-sortable-handle">Placeholder</h2>
                                <div class="handle-actions hide-if-no-js"><button type="button" class="handle-order-higher" aria-disabled="false" aria-describedby="mfn-meta-placeholder-handle-order-higher-description"><span class="screen-reader-text">Subir</span><span class="order-higher-indicator" aria-hidden="true"></span></button><span class="hidden" id="mfn-meta-placeholder-handle-order-higher-description">Mueve la caja Placeholder hacia arriba</span><button type="button" class="handle-order-lower" aria-disabled="false" aria-describedby="mfn-meta-placeholder-handle-order-lower-description"><span class="screen-reader-text">Bajar</span><span class="order-lower-indicator" aria-hidden="true"></span></button><span class="hidden" id="mfn-meta-placeholder-handle-order-lower-description">Mueve la caja Placeholder hacia abajo</span><button type="button" class="handlediv" aria-expanded="true"><span class="screen-reader-text">Alternar panel: Placeholder</span><span class="toggle-indicator" aria-hidden="true"></span></button></div>
                            </div>
                            <div class="inside">
                                <div class="mfn-meta-placeholder">&nbsp;</div>
                            </div>
                        </div>
                        <div id="slugdiv" class="postbox  hide-if-js" style="">
                            <div class="postbox-header">
                                <h2 class="hndle ui-sortable-handle">Slug</h2>
                                <div class="handle-actions hide-if-no-js"><button type="button" class="handle-order-higher" aria-disabled="false" aria-describedby="slugdiv-handle-order-higher-description"><span class="screen-reader-text">Subir</span><span class="order-higher-indicator" aria-hidden="true"></span></button><span class="hidden" id="slugdiv-handle-order-higher-description">Mueve la caja Slug hacia arriba</span><button type="button" class="handle-order-lower" aria-disabled="false" aria-describedby="slugdiv-handle-order-lower-description"><span class="screen-reader-text">Bajar</span><span class="order-lower-indicator" aria-hidden="true"></span></button><span class="hidden" id="slugdiv-handle-order-lower-description">Mueve la caja Slug hacia abajo</span><button type="button" class="handlediv" aria-expanded="true"><span class="screen-reader-text">Alternar panel: Slug</span><span class="toggle-indicator" aria-hidden="true"></span></button></div>
                            </div>
                            <div class="inside">
                                <label class="screen-reader-text" for="post_name">Slug</label><input name="post_name" type="text" size="13" id="post_name" value="">
                            </div>
                        </div>
                    </div>
                    <div id="advanced-sortables" class="meta-box-sortables ui-sortable empty-container"></div>
                </div>
            </div><!-- /post-body -->
            <br class="clear">
        </div><!-- /poststuff -->
    </form>
</div>