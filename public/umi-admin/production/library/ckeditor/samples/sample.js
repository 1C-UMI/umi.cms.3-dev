!function(){CKEDITOR.on("instanceReady",function(a){var b,c=a.editor,d=CKEDITOR.document.$.getElementsByName("ckeditor-sample-required-plugins"),e=d.length?CKEDITOR.dom.element.get(d[0]).getAttribute("content").split(","):[],f=[];if(e.length){for(b=0;b<e.length;b++)c.plugins[e[b]]||f.push("<code>"+e[b]+"</code>");if(f.length){var g=CKEDITOR.dom.element.createFromHtml('<div class="warning"><span>To fully experience this demo, the '+f.join(", ")+" plugin"+(f.length>1?"s are":" is")+" required.</span></div>");g.insertBefore(c.container)}}var h=new CKEDITOR.dom.document(document),i=h.find(".button_icon");for(b=0;b<i.count();b++){var j=i.getItem(b),k=j.getAttribute("data-icon"),l=CKEDITOR.skin.getIconStyle(k,"rtl"==CKEDITOR.lang.dir);j.addClass("cke_button_icon"),j.addClass("cke_button__"+k+"_icon"),j.setAttribute("style",l),j.setStyle("float","none")}})}();