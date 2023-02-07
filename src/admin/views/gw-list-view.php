<div class="wrap">
    <h1 class="wp-heading-inline"><?php esc_html_e("My Boilerplate Crud Plugin", GW_BOILERPLATE_TEXTDOMAIN); ?></h1>

    <hr class="wp-header-end">

    <div id="ajax-response"></div>

    <form class="search-form wp-clearfix" method="get">
        <p class="search-box">
            <label class="screen-reader-text" for="tag-search-input"><?php esc_html_e("Busqueda :", GW_BOILERPLATE_TEXTDOMAIN); ?> </label>
            <input type="search" id="tag-search-input" name="search" value="">
            <input type="submit" id="search-submit" class="button" value="<?php esc_html_e("Buscar", GW_BOILERPLATE_TEXTDOMAIN); ?>">
        </p>
    </form>

    <div class="wp-clearfix">
        <div id="col-left">
            <div class="col-wrap">
                <div class="form-wrap">
                    <h2><?php esc_html_e("Crear Nuevo Boilerplate", GW_BOILERPLATE_TEXTDOMAIN); ?></h2>

                    <form id="gw-form-boilerplate" method="POST" action="<?php echo admin_url("admin-ajax.php"); ?>">
                        <input type="hidden" name="action" value="gw_boilerplate_create" />

                        <div class="form-field form-required term-name-wrap">
                            <label for=""><?php esc_html_e("Nombre", GW_BOILERPLATE_TEXTDOMAIN); ?></label>
                            <input name="name" id="gw-boilerplate-crud-name" type="text" value="" size="40" aria-required="true" aria-describedby="name-description">
                            <p id="name-description"><?php esc_html_e("Escribe el nombre que tendra el nuevo elemento", GW_BOILERPLATE_TEXTDOMAIN); ?></p>
                        </div>

                        <div class="form-field form-required term-name-wrap">
                            <label for=""><?php esc_html_e("Slug", GW_BOILERPLATE_TEXTDOMAIN); ?></label>
                            <input name="slug" id="gw-boilerplate-crud-slug" type="text" value="" size="40" aria-required="true" aria-describedby="slug-description">
                            <p id="slug-description"><?php esc_html_e("Nombre interno con el que se identificara el nuevo elemento.", GW_BOILERPLATE_TEXTDOMAIN); ?></p>
                        </div>

                        <div class="form-field term-description-wrap">
                            <label for="tag-description"><?php esc_html_e("Descripción", GW_BOILERPLATE_TEXTDOMAIN); ?></label>
                            <textarea name="description" id="gw-boilerplate-crud-description" rows="5" cols="40" aria-describedby="description-description"></textarea>
                            <p id="description-description"><?php esc_html_e("Descripción breve de lo que hace el boilerplate", GW_BOILERPLATE_TEXTDOMAIN); ?></p>
                        </div>

                        <div class="form-field term-parent-wrap">
                            <label for="parent"><?php esc_html_e("Habilitado", GW_BOILERPLATE_TEXTDOMAIN); ?></label>
                            <select name="enabled" id="gw-boilerplate-crud-enabled" class="postform" aria-describedby="enabled-description">
                                <option value=""><?php esc_html_e("- Seleccione -", GW_BOILERPLATE_TEXTDOMAIN); ?></option>
                                <option class="level-0" value="<?php echo GW_BOILERPLATE_SI; ?>"><?php esc_html_e("SI", GW_BOILERPLATE_TEXTDOMAIN); ?></option>
                                <option class="level-0" value="<?php echo GW_BOILERPLATE_NO; ?>"><?php esc_html_e("NO", GW_BOILERPLATE_TEXTDOMAIN); ?></option>
                            </select>
                            <p id="enabled-description"><?php esc_html_e("Si el boilerplate se encuentra habilitado o Deshabilitado", GW_BOILERPLATE_TEXTDOMAIN); ?></p>
                        </div>

                        <p class="submit">
                            <input type="button" name="cancel" id="cancel" class="button button-secondary" value="<?php esc_html_e("Cancelar", GW_BOILERPLATE_TEXTDOMAIN); ?>">
                            <input type="submit" name="submit" id="submit" class="button button-primary" value="<?php esc_html_e("Crear Nuevo Registro", GW_BOILERPLATE_TEXTDOMAIN); ?>"> <span style="display: none;" class="spinner">sssss</span>
                        </p>
                    </form>

                </div>
            </div>
        </div>


        <div id="col-right">
            <div class="col-wrap">
                <form id="posts-filter" method="post">
                    <div class="tablenav top">
                        <div class="tablenavPagination"></div>
                        <br class="clear">
                    </div>

                    <table id="gw-boilerplate-table" class="wp-list-table widefat fixed striped table-view-list tags">
                        <thead>
                            <tr>
                                <th style="width:10%" data-name="id" class="manage-column column-id"><a href="javascript:void(0);"><span><?php esc_html_e("ID", GW_BOILERPLATE_TEXTDOMAIN); ?></span><span class="sorting-indicator"></span></a></td>
                                <th style="width:20%" data-name="name" class="manage-column column-name "><a href="javascript:void(0);"><span><?php esc_html_e("Nombre", GW_BOILERPLATE_TEXTDOMAIN); ?></span><span class="sorting-indicator"></span></a></th>
                                <th style="width:20%" data-name="slug" class="manage-column column-slug"><a href="javascript:void(0);"><span><?php esc_html_e("Slug", GW_BOILERPLATE_TEXTDOMAIN); ?></span><span class="sorting-indicator"></span></a></th>
                                <th style="width:20%" data-name="enabled" class="manage-column column-slug"><a href="javascript:void(0);"><span><?php esc_html_e("Habilitado", GW_BOILERPLATE_TEXTDOMAIN); ?></span><span class="sorting-indicator"></span></a></th>
                                <th style="width:30%" data-name="description" class="manage-column column-description "><a href="javascript:void(0);"><span><?php esc_html_e("Descripción", GW_BOILERPLATE_TEXTDOMAIN); ?></span><span class="sorting-indicator"></span></a></th>
                            </tr>
                        </thead>

                        <tbody></tbody>

                        <tfoot>
                            <tr>
                                <td style="width:10%" class="manage-column column-id "><a href="javascript:void(0);"><span><?php esc_html_e("ID", GW_BOILERPLATE_TEXTDOMAIN); ?></span><span class="sorting-indicator"></span></a></td>
                                <td style="width:20%" class="manage-column column-name "><a href="javascript:void(0);"><span><?php esc_html_e("Nombre", GW_BOILERPLATE_TEXTDOMAIN); ?></span><span class="sorting-indicator"></span></a></td>
                                <td style="width:20%" class="manage-column column-slug"><a href="javascript:void(0);"><span><?php esc_html_e("Slug", GW_BOILERPLATE_TEXTDOMAIN); ?></span><span class="sorting-indicator"></span></a></td>
                                <td style="width:20%" data-name="enabled" class="manage-column column-slug"><a href="javascript:void(0);"><span><?php esc_html_e("Habilitado", GW_BOILERPLATE_TEXTDOMAIN); ?></span><span class="sorting-indicator"></span></a></td>
                                <td style="width:30%" class="manage-column column-description "><a href="javascript:void(0);"><span><?php esc_html_e("Descripción", GW_BOILERPLATE_TEXTDOMAIN); ?></span><span class="sorting-indicator"></span></a></td>
                            </tr>
                        </tfoot>

                    </table>

                    <div class="tablenav bottom">
                        <div class="tablenavPagination"></div>
                        <br class="clear">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script id="gw-boilerplate-row-template" type="text/x-handlebars-template">
    <tr>
        <td>{{id}}</td>
        <td>
            {{name}}
            <a href="javascript:void(0)"><?php esc_html_e("Editar", GW_BOILERPLATE_TEXTDOMAIN); ?></a>
        </td>
        <td>{{slug}}</td>
        <td>{{enabled}}</td>
        <td>{{description}}</td>
    </tr>
</script>