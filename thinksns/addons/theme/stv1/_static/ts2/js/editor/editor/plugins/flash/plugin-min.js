KISSY.Editor.add("flash",function(c){var d=KISSY.Editor,e=c.htmlDataProcessor,f=c.cfg.pluginConfig,g=e&&e.dataFilter;g&&g.addRules({elements:{object:function(a){var b=a.attributes;if(!(b.classid&&String(b.classid).toLowerCase())){for(b=0;b<a.children.length;b++)if(a.children[b].name=="embed"){if(!d.Utils.isFlashEmbed(a.children[b]))break;return e.createFakeParserElement(a,"ke_flash","flash",true)}return null}return e.createFakeParserElement(a,"ke_flash","flash",true)},embed:function(a){if(!d.Utils.isFlashEmbed(a))return null;
return e.createFakeParserElement(a,"ke_flash","flash",true)}}},5);c.addPlugin("flash",function(){var a;if(!f.flash||f.flash.btn!==false)a=c.addButton("flash",{contentCls:"ke-toolbar-flash",title:"\u63d2\u5165Flash",mode:d.WYSIWYG_MODE,loading:true});d.use("flash/support",function(){var b=new d.Flash(c);a&&a.reload({offClick:function(){b.show()},destroy:function(){b.destroy()}})});this.destroy=function(){a.destroy()}})},{attach:false,requires:["fakeobjects"]});
