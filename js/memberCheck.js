const dataElemt = document.querySelector('data');
const class_name_table = {0: 'A', 1: 'B',2: 'C', 3: 'D'}
const member_data = {};
const member_list = [];
fetch( './file/111資訊管理系系費名單.xls' )
.then( response => response.arrayBuffer() )
    .then( arrayBuffer => {
        const data = new Uint8Array(arrayBuffer);
        const workbook = XLSX.read(data, {type: 'array'});
        for(let i = 0; i < workbook.SheetNames.length; i++){
            member_data[`class_${class_name_table[i]}`] = []
            const sheet = member_data[Object.keys(member_data)[i]];
            sheet.push([]);
            sheet[0].push(workbook.SheetNames[i]); // 取得工作表名稱
            sheet[0].push(workbook.Sheets[sheet[0][0]]); // 用工作表名稱取得工作表
            sheet[0][1] = XLSX.utils.sheet_to_json(sheet[0][1]); // 把工作表轉 JSON
            sheet.push([]);
            let grade_count = 0;
            for(let j = 0; j < sheet[0][1].length; j++) grade_count = Object.keys(sheet[0][1][j]).length / 2 > grade_count ? Object.keys(sheet[0][1][j]).length / 2 : grade_count;
            for(let j = 0; j < grade_count; j++) {
                for(let k = 0; k < sheet[0][1].length; k++){
                    const student_data = sheet[0][1][k];
                    const data_keys = Object.keys(student_data);
                    sheet[1].push([]);
                    if(student_data[data_keys[j * 2]] == undefined) sheet[1].splice(sheet[1].length - 1, 1);
                    else {
                        sheet[1][sheet[1].length-1].push(data_keys[j * 2]);
                        sheet[1][sheet[1].length-1].push(student_data[data_keys[j * 2]].toString());
                        sheet[1][sheet[1].length-1].push(student_data[data_keys[j * 2 + 1]]);
                    }
                }
            }
            member_list.push(...sheet[1])
        }


        
        const btn = document.querySelector('#button');
        const id_input = document.querySelector('#student_id');
        const mes = document.querySelector('#mes');
        btn.addEventListener('click', ()=>{
            const id = id_input.value.toString();
            id_input.value = "";
            mes.innerHTML = "";
            if(id != '' && id.length === 8){
                for(let i = 0; i < member_list.length; i++){
                    const member_id = member_list[i][1];
                    if(id === member_id) {mes.innerHTML = `<table><tr><th>班級</th><th>學號</th><th>姓名</th></tr><tr><td>${member_list[i][0]}</td><td>${member_list[i][1]}</td><td>${member_list[i][2]}</td></tr></table>`;break;}
                    else if(id !== member_id && i === member_list.length - 1) {mes.innerHTML = `<h5>非會費生</h5>`;}
                }
            }
        });



    }
);