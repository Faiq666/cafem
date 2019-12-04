 $(document).ready(function () {
     var upload =  Dropzone.forElement(".dropzone")
     upload.on("complete",function (file) {
            var data_url = $(".dropzone").data("url");
            $.post(data_url,{},function (response) {
            $(".gallery_render").html(response)
                $('[data-switchery]').each(function () {
                    var $this = $(this),
                        color = $this.attr('data-color') || '#188ae2',
                        jackColor = $this.attr('data-jackColor') || '#ffffff',
                        size = $this.attr('data-size') || 'default'

                    new Switchery(this, {
                        color: color,
                        size: size,
                        jackColor: jackColor
                    });
                });
        })
     })
     $(".delete").on("click",function () {
         var data_url = $(".delete").data("url");
         $.post(data_url,{},function (response) {
             $(".gallery_render").html(response);
             $('[data-switchery]').each(function () {
                 var $this = $(this),
                     color = $this.attr('data-color') || '#188ae2',
                     jackColor = $this.attr('data-jackColor') || '#ffffff',
                     size = $this.attr('data-size') || 'default'

                 new Switchery(this, {
                     color: color,
                     size: size,
                     jackColor: jackColor
                 });


             });




         })
     })

})