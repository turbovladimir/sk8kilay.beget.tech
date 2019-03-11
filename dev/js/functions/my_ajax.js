var data_output;

function my_ajax(url, request_type, input_params,callback){

                    $.ajax({
                        type: request_type,
                        url: url,
                        data: input_params,
                        success: function (data) {
                            if (data !== "") {
                                data_output = data;
                                callback();
                            }
                        }
                    });

}
