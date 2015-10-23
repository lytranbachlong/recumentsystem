var arrSkill = [1,2,3,4,5];
    var arrExperience = [1,2,3,4,5];
    var arrSkillSelected =[];
    var arrSkillOSSelected =[];
    var arrLanguageSelected =[];
    $(document).ready(function() {
    //checkValidInput();
    $(".chosen-select-career").chosen({max_selected_options: 5});
    $(".chosen-select-area").chosen({max_selected_options: 5});
    $(".link-advance-search").on("click",function(){
    	$(".advance-search").toggle();
    });

    // $("#example1").DataTable();

    $(".btn-add-skill").click(function(e){
        e.preventDefault();

       
        //alert("addskill");
        var skill = $( "#skill option:selected" ).text();
        var exprience = $( "#exprience option:selected" ).text();
        var skillValue = $( "#skill" ).val();
        var exprienceValue = $( "#exprienceSkill" ).val();
        if(skillValue != -1 && exprienceValue != -1){
            if(arrSkillSelected.indexOf(skillValue) < 0){
               //alert(skillValue + exprienceValue);

                    var skillSelected='<span class="item-skill-selected" data-skill="skill-'+skillValue+'-'+exprienceValue+'">' + skill + '-' + exprience+'<a data-skill="skill-'+skillValue+'-'+exprienceValue+'" onclick="deleteSkill(this)" href="javascript:void(0)" class="delete-item-skill"><i class="fa fa-times"></i></a></span>';
                    $(".alert-skill-selected").append(skillSelected);
                    arrSkillSelected.push(skillValue);
                }
            }
         if($(".alert-skill-selected").children().length > 0){
            $(".alert-skill-selected").removeClass('hide');
        }
    });


  //add os

  $(".btn-add-os").click(function(e){
        e.preventDefault();

       
        //alert("addskill");
        var skill = $( "#skillOS option:selected" ).text();
        var exprience = $( "#exprienceSkillOS option:selected" ).text();
        var skillValue = $( "#skillOS" ).val();
        var exprienceValue = $( "#exprienceSkillOS" ).val();
        if(skillValue != -1 && exprienceValue != -1){
            if(arrSkillOSSelected.indexOf(skillValue) < 0){
               //alert(skillValue + exprienceValue);

                    var skillSelected='<span class="item-skill-selected" data-os="os-'+skillValue+'-'+exprienceValue+'">' + skill + '-' + exprience+'<a data-os="os-'+skillValue+'-'+exprienceValue+'" onclick="deleteSkillOS(this)" href="javascript:void(0)" class="delete-item-skill"><i class="fa fa-times"></i></a></span>';
                    $(".alert-os-selected").append(skillSelected);
                    arrSkillOSSelected.push(skillValue);
                }
            }
         if($(".alert-os-selected").children().length > 0){
            $(".alert-os-selected").removeClass('hide');
        }
    });

	//});

 $(".btn-add-language").click(function(e){
        e.preventDefault();

       
        //alert("addskill");
        var skill = $( "#language option:selected" ).text();
        var exprience = $( "#level-language option:selected" ).text();
        var skillValue = $( "#language" ).val();
        var exprienceValue = $( "#level-language" ).val();
        if(skillValue != -1 && exprienceValue != -1){
            if(arrSkillOSSelected.indexOf(skillValue) < 0){
               //alert(skillValue + exprienceValue);

                    var skillSelected='<span class="item-skill-selected" data-language="language-'+skillValue+'-'+exprienceValue+'">' + skill + '-' + exprience+'<a data-language="language-'+skillValue+'-'+exprienceValue+'" onclick="deleteLanguage(this)" href="javascript:void(0)" class="delete-item-skill"><i class="fa fa-times"></i></a></span>';
                    $(".alert-language-selected").append(skillSelected);
                    arrSkillOSSelected.push(skillValue);
                }
            }
         if($(".alert-language-selected").children().length > 0){
            $(".alert-language-selected").removeClass('hide');
        }
    });

  });
	 function getSkills(sel) {
       if(sel.value == 1){
       		$(".career-it").removeClass('hide');
       }
       else {
       		$(".career-it").addClass('hide');
       }
    }
    function deleteSkill(sel){
    	$(".alert-skill-selected").find("[data-skill='" + $(sel).data("skill") + "']").remove();
         if($(".alert-skill-selected").children().length <= 0){
            $(".alert-skill-selected").addClass('hide');
        }
       // arrSkillSelected.remo
         arrSkillSelected.splice(arrSkillSelected.indexOf(($(sel).data("skill").split("-"))[0]), 1);
    }

    function deleteSkillOS(sel){
      $(".alert-os-selected").find("[data-os='" + $(sel).data("os") + "']").remove();
         if($(".alert-os-selected").children().length <= 0){
            $(".alert-os-selected").addClass('hide');
        }
       // arrSkillSelected.remo
         arrSkillOSSelected.splice(arrSkillOSSelected.indexOf(($(sel).data("os").split("-"))[0]), 1);
    }
    function deleteLanguage(sel){
      $(".alert-language-selected").find("[data-language='" + $(sel).data("language") + "']").remove();
         if($(".alert-language-selected").children().length <= 0){
            $(".alert-language-selected").addClass('hide');
        }
       // arrSkillSelected.remo
         arrLanguageSelected.splice(arrLanguageSelected.indexOf(($(sel).data("language").split("-"))[0]), 1);
    }
         $(function () {
        $('#example1').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
           "dom": '<"top"iflp<"clear">>rt<"bottom"iflp<"clear">>',
           "oLanguage": {
            "oPaginate": {
                "sFirst": "First page", // This is the link to the first page
                "sPrevious": "前ページ", // This is the link to the previous page
                "sNext": "次ページ", // This is the link to the next page
                "sLast": "Last page" // This is the link to the last page
            }
        }
        });

      });