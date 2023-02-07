(function ($) {
    'use strict';

    $(function () {
        class GW_Boilerplate_Admin {

            constructor() {
                this.Gw_Boilerplate_Table = "#gw-boilerplate-table";
                this.Gw_Boilerplate_Obj_Table = null;
                this.Gw_Boilerplate_Form = "#gw-form-boilerplate";
                this.GW_Boilerplate_Validate_Form = null;
                this.Gw_Boilerplate_Modal_Edit = null;
                this.Gw_Boilerplate_Form_Canel = "#gw-form-boilerplate input#cancel";
                this.Gw_Boilerplate_Spinner = "#gw-form-boilerplate .spinner";

                this.initForm();
                this.initPagination();
            }

            initForm() {
                var self = this;
                
                this.GW_Boilerplate_Validate_Form = $(this.Gw_Boilerplate_Form).validate({
                    rules: {
                        name: {
                            required: true,
                            minlength: 3,
                            maxlength:50
                        },
                        slug: {
                            required: true,
                            minlength: 3,
                            maxlength:50
                        },
                        description: {
                            required: false,
                            minlength: 3,
                            maxlength:250
                        }
                    }
                });
                
                $(this.Gw_Boilerplate_Form).ajaxForm({
                    method:"POST",
                    beforeSubmit: function () {
                        $(this.Gw_Boilerplate_Spinner).show();


                        var valid = self.GW_Boilerplate_Validate_Form.valid();
                        return valid;
                    },
                    success: function (response) {
                        if (response.success) {
                            self.GW_Boilerplate_Validate_Form.resetForm();
                            self.Gw_Boilerplate_Obj_Table.callServerSide();
                        }

                        $(this.Gw_Boilerplate_Spinner).hide();
                    },
                    error: function (e) {
                        console.log(JSON.stringify(e));
                        alert("Entro en error");
                    }
                });

                $(this.Gw_Boilerplate_Form_Canel).on("click", function(e){
                    e.preventDefault();
                    e.stopPropagation();

                    self.GW_Boilerplate_Validate_Form.resetForm();
                });
            }

            initPagination() {
                var self = this;

                this.Gw_Boilerplate_Obj_Table = $(this.Gw_Boilerplate_Table).BasicPagination({
                    serverSide: {
                        apiUrl: Gw_Script.admin_ajax_url,
                        extraData: function () {
                            return {
                                action: 'gw_boilerplate_pagination'
                            }
                        }
                    },
                    paginationId: 'gw-boilerplate-table',
                    templateId: 'gw-boilerplate-row-template',
                    pagesContainerClass: 'tablenavPagination'
                }).on("observerActions", function (event, pagination) {
                    var rows = $(pagination).find("tBody").find("tr");

                    $.each(rows, function (key, row) {
                        var edit = $(row).find("td").eq(1);
                        edit.on("click", self.showModalEdit);
                    });
                });
            }

            showModalEdit(e) {
                e.preventDefault();
                e.stopPropagation();

            }
        }

        new GW_Boilerplate_Admin();
    });

})(jQuery);
