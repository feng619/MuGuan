<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>慕光之城</title>
	<link rel='shortcut icon' href='img/favicon.ico' type='image/x-icon'/ >
	<link rel="stylesheet" type="text/css" href="css/reset.css">	
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">	
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome-4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/04data.css">
	<script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/gmaps.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyBi7e8AiTyqWiFt9vlbGqsAzGyRhVWqCsk&sensor=true"></script>
	<script src="js/jquery-csv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.6/d3.min.js" ></script>

	<link rel="stylesheet" type="text/css" href="css/login.css">

</head>
<body>
	<?php include 'login.php';?>
	<div class="wrapper">
		<header class="head4">

			<?php include 'nav.php';?>
				<script>
					$(function(){
						$('.up li:nth-child(3) a').addClass('acting');
					});
				</script>
			<p class="page_title">資料庫</p>

		</header>





		<section class="s41">
			<h2>資料庫查詢</h2>

			<div class="s41_1_discription">
				<p>所有會員上傳的照片都會儲存在資料庫，您可以依條件搜尋所有照片，資料呈現方式有以下三種：</p>
				<ul>
                    <li><p>資料數與年月份的折線圖</p></li>
                    <li><p>台灣地圖的資料分布</p></li>
                    <li><p>資料影像與詳細訊息</p></li>
                </ul>
                <div class="clearfix"></div>
			</div>

			<div class="s41_1">
			    <div class="s41_1box">
			    	<p>提供者</p>
				    <select id="S_person" onchange="change_person()">
				        <option value="all">全部</option>
				    </select>
			    </div>

			    <div class="s41_1box date">
			    	<p>年</p>
			        <select id="S_year" onchange="change_year()">
			            <option value="all">全部</option>
			        </select>
			    </div>
			  
			    <div class="s41_1box date">
			    	<p>月</p>
			        <select id="S_month" onchange="change_month()">
			            <option value="all">全部</option>
			        </select>
			    </div>

			    <div class="s41_1box locate">
			    	<p>縣市</p>
			        <select id="S_city" onchange="change_city()">
			            <option value="all">全部</option>
			        </select>
			    </div>

			    <div class="s41_1box locate">
			    	<p>鄉鎮</p>
			        <select id="S_town" onchange="change_town()">
			            <option value="all">全部</option>
			        </select>
			    </div>

			    <div class="s41_1box locate third">
			    	<p>地點</p>
			        <select id="S_loc" onchange="change_loc()">
			            <option value="all">全部</option>
			        </select>
			    </div>


			    <div class="s41_1box species">
			    	<p>科名</p>
			        <select id="S_family" onchange="change_family()">
			            <option value="all">全部</option>
			        </select>
			    </div>
			    <div class="s41_1box species">
			    	<p>屬名</p>
			        <select id="S_genus" onchange="change_genus()">
			            <option value="all">全部</option>
			        </select>
			    </div>
			    <div class="s41_1box species third">
			    	<p>學名</p>   
			        <select id="S_species" onchange="change_species()">
			            <option value="all">全部</option>
			        </select>
			    </div>
	
			    <button class="data_submit blue_btn" onclick="submit();">查詢</button>

			</div>
		</section>






		<section class="s43">
			<h2>查詢結果</h2>

            <div class="chart_title_c">
                <h3 class="chart_title">資料數與年月份的折線圖</h3>
            </div>
            <div id="svgcont"><svg></svg></div>

            <div class="chart_title_c">
                <h3 class="chart_title">台灣地圖的資料分布</h3>
            </div>
            <div id="map"></div>

            <div class="chart_title_c">
                <h3 class="chart_title">資料影像與詳細訊息</h3>
            </div>
			<div class="s43_1">
			
			</div>
			<p class="more_btn">更多<i class="fa fa-caret-down fa-x"></i></p>
		</section>






	<?php include 'footer.php';?>





	</div>




<script>
    var map;
    $(document).ready(function(){
        // 中心: 埔里虎頭山
        map = new GMaps({
                div: '#map',
                zoom: 7,
                lat: 23.973890,
                lng: 120.982017,
                width: '700px',
                height: '460px',
        });     
    });

    var csv = {

        Contents:"Null",

        init: function () {
            $.ajax({
                url: "mothdatabase.txt", // txt 要另存新檔, 選擇 utf-8 編碼才不會亂碼
                async: false,
                scriptCharset: 'utf-8',
                contentType: "application/x-www-form-urlencoded;charset=utf-8",
                success: function (data){
                    csv.Contents = data;
                }
            });
        }
    };

    csv.init();



    // 將所有文字合併, 用逗點或斷行分開, 放進陣列
    csv.Contents = Array.from(csv.Contents).join('').split(/,|\n/);

    //轉成二維陣列
    var arr=[], len=csv.Contents.length, rows=Math.ceil(len/14);
    for(let i=0; i<rows; i++){
        arr[i]=csv.Contents.slice( i*14, (i+1)*14 );
    }


//==========================================================================

    function create_options(type, type_id){
        for(let i=0; i < type.length; i++){
            var ops = document.createElement('option');
            ops.value = type[i];
            ops.innerHTML = type[i];
            document.getElementById(type_id).appendChild(ops);
        }
    }

    function create_norepeat_arr(i, sort_num){
        let v;
        v=arr.map(cv=>cv[i]);
        v.shift(); v.pop();
        v = sort_num ? Array.from(new Set(v)).sort((a,b)=>b-a) : Array.from(new Set(v)).sort();
        return v;
    }

    //取得不重複的 提供者
    var person = create_norepeat_arr(0, false);
    create_options(person, 'S_person');

    //取得不重複的 年
    var year = create_norepeat_arr(1, true);
    create_options(year, 'S_year');

    //取得不重複的 月
    var month = create_norepeat_arr(2, true);
    create_options(month, 'S_month');

    //取得不重複的 縣市
    var city = create_norepeat_arr(4, false);
    create_options(city, 'S_city');

    //鄉鎮
    var town = [];
    var town_unique = create_norepeat_arr(5, false);

    //地點
    var loc = [];
    var loc_unique = create_norepeat_arr(6, false);

    //取得不重複的 科名
    var family = create_norepeat_arr(9, false);
    create_options(family, 'S_family');

    //屬名
    var genus = [];
    var genus_unique = create_norepeat_arr(10, false);

    //學名
    var species = [];
    var species_unique = create_norepeat_arr(11, false);

//==========================================================================
    var search_p  = 'all';
    var search_y  = 'all';
    var search_m  = 'all';
    var search_ct = 'all';
    var search_tn = 'all';
    var search_lc = 'all';
    var search_fa = 'all';
    var search_ge = 'all';
    var search_sp = 'all';

    function change_person(){
        search_p  = document.getElementById("S_person").value;
        if(search_p !== 'all') $('#S_person').addClass('active_select');
        else $('#S_person').removeClass('active_select');
    }

    function change_year(){
        search_y  = document.getElementById("S_year").value;
        if(search_y !== 'all') $('#S_year').addClass('active_select');
        else $('#S_year').removeClass('active_select');
    }

    function change_month(){
        search_m  = document.getElementById("S_month").value;
        if(search_m !== 'all') $('#S_month').addClass('active_select');
        else $('#S_month').removeClass('active_select');
    }

    function change_city(){
        search_ct = document.getElementById("S_city").value;
        if(search_ct !== 'all'){
            $('#S_city').addClass('active_select');
            $('#S_town').removeClass('active_select');
            $('#S_loc').removeClass('active_select');
        }else{
            $('#S_city').removeClass('active_select');
            $('#S_town').removeClass('active_select');
            $('#S_loc').removeClass('active_select');
        };

        //刪除 town 選單 (除了全部)
        town = [];
        let elements = document.getElementsByClassName('op_town');
        while(elements.length > 0){
            elements[0].parentNode.removeChild(elements[0]);
        }
        //刪除 loc 選單 (除了全部)
        loc = [];
        let eles = document.getElementsByClassName('op_loc');
        while(eles.length > 0){
            eles[0].parentNode.removeChild(eles[0]);
        }

        //製作 town 選單
        if(search_ct !== 'all'){
            for(let i=0; i < arr.length; i++){
                if(arr[i][4]===search_ct){
                    town.push(arr[i][5]);
                }
            }
            town = Array.from(new Set(town)).sort();

            for(let i=0; i < town.length; i++){
                var ops = document.createElement('option');
                ops.value = town[i];
                ops.innerHTML = town[i];
                ops.className = 'op_town';
                document.getElementById('S_town').appendChild(ops);
            }
        }else if(search_ct === 'all'){
            search_tn = 'all';
            search_lc = 'all';
        }      
    }

    function change_town(){
        search_tn = document.getElementById("S_town").value;
        if(search_tn !== 'all'){
            $('#S_town').addClass('active_select');
            $('#S_loc').removeClass('active_select');
        }else{
            $('#S_town').removeClass('active_select');
            $('#S_loc').removeClass('active_select');
        };

        //刪除 loc 選單 (除了全部)
        loc = [];
        let eles = document.getElementsByClassName('op_loc');
        while(eles.length > 0){
            eles[0].parentNode.removeChild(eles[0]);
        }

        //製作 loc 選單
        if(search_tn !== 'all'){
            for(let i=0; i < arr.length; i++){
                if(arr[i][5]===search_tn){
                    loc.push(arr[i][6]);
                }
            }
            loc = Array.from(new Set(loc)).sort();

            for(let i=0; i < loc.length; i++){
                var ops = document.createElement('option');
                ops.value = loc[i];
                ops.innerHTML = loc[i];
                ops.className = 'op_loc';
                document.getElementById('S_loc').appendChild(ops);
            }
        }         
    }

    function change_loc(){
        search_lc = document.getElementById("S_loc").value;
        if(search_lc !== 'all') $('#S_loc').addClass('active_select');
        else $('#S_loc').removeClass('active_select');
    }

    function change_family(){
        search_fa = document.getElementById("S_family").value;
        if(search_fa !== 'all'){
            $('#S_family').addClass('active_select');
            $('#S_genus').removeClass('active_select');
            $('#S_species').removeClass('active_select');
        }else{
            $('#S_family').removeClass('active_select');
            $('#S_genus').removeClass('active_select');
            $('#S_species').removeClass('active_select');
        };

        //刪除 genus 選單 (除了全部)
        genus = [];
        let elements = document.getElementsByClassName('op_genus');
        while(elements.length > 0){
            elements[0].parentNode.removeChild(elements[0]);
        }
        //刪除 species 選單 (除了全部)
        species = [];
        let eles = document.getElementsByClassName('op_species');
        while(eles.length > 0){
            eles[0].parentNode.removeChild(eles[0]);
        }

        //製作 genus 選單
        if(search_fa !== 'all'){
            for(let i=0; i < arr.length; i++){
                if(arr[i][9]===search_fa){
                    genus.push(arr[i][10]);
                }
            }
            genus = Array.from(new Set(genus)).sort();

            for(let i=0; i < genus.length; i++){
                var ops = document.createElement('option');
                ops.value = genus[i];
                ops.innerHTML = genus[i];
                ops.className = 'op_genus';
                document.getElementById('S_genus').appendChild(ops);
            }
        }else if(search_fa === 'all'){
            search_ge = 'all';
            search_sp = 'all';
        }      
    }

    function change_genus(){
        search_ge = document.getElementById("S_genus").value;
        if(search_ge !== 'all'){
            $('#S_genus').addClass('active_select');
            $('#S_species').removeClass('active_select');
        }else{
            $('#S_genus').removeClass('active_select');
            $('#S_species').removeClass('active_select');
        };

        //刪除 species 選單 (除了全部)
        species = [];
        let eles = document.getElementsByClassName('op_species');
        while(eles.length > 0){
            eles[0].parentNode.removeChild(eles[0]);
        }

        //製作 species 選單
        if(search_ge !== 'all'){
            for(let i=0; i < arr.length; i++){
                if(arr[i][10]===search_ge){
                    species.push(arr[i][11]);
                }
            }
            species = Array.from(new Set(species)).sort();

            for(let i=0; i < species.length; i++){
                var ops = document.createElement('option');
                ops.value = species[i];
                ops.innerHTML = species[i];
                ops.className = 'op_species';
                document.getElementById('S_species').appendChild(ops);
            }
        }         
    }

    function change_species(){
        search_sp = document.getElementById("S_species").value;
        if(search_sp !== 'all') $('#S_species').addClass('active_select');
        else $('#S_species').removeClass('active_select');
    }

    function submit(){
        let search_arr;
        let loop = [search_p, search_y, search_m, search_ct, search_tn, search_lc, search_fa, search_ge, search_sp];
        let unique = [person, year, month, city, town, loc, family, genus, species];
        let unique_alter = [ , , , , town_unique, loc_unique, , genus_unique, species_unique];
        let hip = [0,1,2,4,5,6,9,10,11];

        search_arr = arr.filter(function(cv,i){
            let keep=true;
            for(let i=0; i < loop.length; i++){
                if(loop[i] === 'all'){
                    //在 person 裡面沒有 search_p, 就不保留
                    if(unique[i].length===0){
                        if(unique_alter[i].indexOf( cv[hip[i]] )===-1) keep=false;
                    }else if( unique[i].indexOf( cv[hip[i]] )===-1 ){
                        keep=false;
                    }
                }else{
                    //cv[i] 這筆資料和 search_p 不相等, 就不保留
                    if( cv[hip[i]]!==loop[i] ) keep=false;
                }
            }
            return keep;            
        });

        //刪除方框 .s43_1box
        let eles = document.getElementsByClassName('s43_1box');
        while(eles.length > 0){
            eles[0].parentNode.removeChild(eles[0]);
        }

        //製作方框 .s43_1box
        for(let i=0; i < search_arr.length; i++){
            let div = document.createElement('div');
            let outer = document.getElementsByClassName('s43_1')[0];
            div.className = 's43_1box';
            let id = 's43_1box_' + i;
            div.id = id;
            outer.appendChild(div);

            let a = document.createElement('a');
            a.className = 'imgbox';
            let a_id = 's43_1box_imgbox_' + i;
            a.id = a_id;

            let thisdiv = document.getElementById(id);
            
            let img = document.createElement('img');
            img.src = search_arr[i][13];

            let h3 = document.createElement('h3');
            h3.className = 'album_name';
            h3.innerHTML = search_arr[i][0];

            let p1 = document.createElement('p');
            p1.className = 'album_info';
            p1.innerHTML = search_arr[i][1]+'.'+search_arr[i][2]+'.'+search_arr[i][3]+' '+search_arr[i][6];

            let h4 = document.createElement('h4');
            h4.className = 'album_chinese';  
            h4.innerHTML = search_arr[i][12];         

            let p2 = document.createElement('p');
            p2.className = 'album_species'; 
            p2.innerHTML = search_arr[i][11]; 


            thisdiv.appendChild(a);

            let thisa = document.getElementById(a_id);
            thisa.appendChild(img);

            thisdiv.appendChild(h3);
            thisdiv.appendChild(p1);
            thisdiv.appendChild(h4);
            thisdiv.appendChild(p2);

        }

        //移除 markers
        map.removeMarkers();
        //製作 markers 
        search_arr.map(function(cv){
            let locate = cv[6];
            map.addMarker({
                lat: cv[8],
                lng: cv[7],
                title: cv[6],
                icon:'http://maps.google.com/mapfiles/ms/icons/red-dot.png',
                click: function(e) {
                    // this.setIcon('http://maps.google.com/mapfiles/ms/icons/blue-dot.png');
                    $(".yellow_outline").removeClass("yellow_outline");
                    search_arr.map(function(cv,i){
                        if(cv[6]===locate){
                            let id_n = '#s43_1box_' + i;
                            $(id_n).addClass("yellow_outline");
                        }
                    });
                }
            });             
        });

        //製作折線圖data
        var linedata = [['',0]];
        search_arr.map(function(cv){
            var time = cv[1]+'.'+cv[2];
            if( linedata.filter(function(cv1){return cv1[0]===time}).length ===0 ){
                linedata.push([time,1]);
            }
            else{
                linedata = linedata.map(function(cve){
                    if(cve[0]===time){
                        let i = cve[1];
                        return [cve[0], i+1]
                    }else{
                        return cve;
                    }
                });
            }
        });
        linedata.shift();
        //data 排序
        //sort([1,2,3,4])的尋訪方式 : arr[0], arr[1], arr[2] / arr[1], arr[2] / arr[2]
        function sort(arr,len){
         var len = len || arr.length;
         arr.forEach(function(cv,i,ar){
             if(i!==ar.length-1){
                 if(ar[i][0]>ar[i+1][0]){
                     let temp='';
                     temp = ar[i];
                     ar[i] = ar[i+1];
                     ar[i+1] = temp;
                 }
             }
         });
         return len==2 ? arr : sort(arr,len-1);
        }
        if(linedata.length>1) sort(linedata);
        //資料太長, 年份縮寫
        if(linedata.length>10){
            linedata = linedata.map(function(cv){
                return [ cv[0].slice(2) , cv[1] ];
            });
        };

        //刪除折線圖
        let svgc = document.getElementById("svgcont");
        let s = document.getElementsByTagName("svg")[0];
        if(svgc){svgc.removeChild(s);};

        //find max
        let max = 1;
        linedata.map(function(cv){
            max = cv[1] > max ? cv[1] : max;
        });

        //座標軸
        let timearr = [];
        linedata.map(function(cv,i){timearr[i]=cv[0]});

        var scaleX = d3.scale.ordinal()
                    .domain(d3.range( linedata.length ))
                    .rangeRoundBands([75,675]);
        var scaleXX= d3.scale.ordinal()
                    .domain( timearr )
                    .rangeRoundBands([75,675]);
        var scaleY = d3.scale.ordinal()
                    .domain(d3.range( max+1 ))
                    .rangeRoundBands([260,40]);

        var axisX = d3.svg.axis()
                    .scale(scaleXX)
                    .orient('bottom');
        var axisY = d3.svg.axis()
                    .scale(scaleY)
                    .orient('left');

        //繪製折線圖
        var linef= d3.svg.line()
                    .x(function(d,i) { return scaleX(i)+(650/linedata.length)/2-25; })
                    .y(function(d,i) { return scaleY(d[1])+(220/(max+1))/4; })
                    .interpolate("linear");

        var svgline = d3.select("#svgcont").append("svg")
                        .attr("width", 700)
                        .attr("height", 300);

        var lineGraph = svgline.append("path")
                        .attr("d", linef(linedata))
                        .attr("stroke", "#0D6FB8")
                        .attr("stroke-width", 2)
                        .attr("fill", "none")
                        .attr("stroke-dasharray", function(d){return d3.select(this).node().getTotalLength() + " " + d3.select(this).node().getTotalLength()})
                        .attr("stroke-dashoffset", function(d){return d3.select(this).node().getTotalLength()})
                        .transition().duration(500)
                        .ease("linear")
                        .attr("stroke-dashoffset", 0);

        //調用座標軸
        svgline.append('g')
                .attr('class','axis')
                .attr('transform','translate(-20,243)')
                .call(axisX);
        svgline.append('g')
                .attr('class','axis')
                .attr('transform','translate(55,-17)')
                .call(axisY);

    }    

// console.log(arr.length);
// console.log(arr[2]);
// console.log(csv.Contents[0]);



</script>
</body>
</html>