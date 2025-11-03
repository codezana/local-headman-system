 <div class="responsivetable">
                        <table class="table table-bordered border-black">
                            <thead>
                                <tr>

                                    <th scope="col" class="font_rudawbold">ژ</th>
                                    <th class="font_rudawbold">سڕینەوە</th>
                                    <th scope="col" class="font_rudawbold">ناوی ئەندامانی خێزان</th>
                                    <th scope="col" class="font_rudawbold">موالید</th>
                                    <th scope="col" class="font_rudawbold">پیشە</th>
                                    <th scope="col" class="font_rudawbold">شوێنی کار</th>
                                    <th scope="col" class="font_rudawbold">کۆدی ئاسایش</th>
                                    <th scope="col" class="font_rudawbold">ژ.مۆبایل</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <th scope="row" style="font-size: 23px" class="font_Rabar_028">1</th>
                                    <td>
                                        <a onclick="deleteRow(this)" class="delete-set"><img
                                                src="{{ asset('assets/img/delete.svg') }}" alt="svg"></a>
                                    </td>

                                    <td class="font_Rabar_028"><input type="text" id="familyname" class="familyname">
                                    </td>


                                    <td class="font_Rabar_028">
                                        <div class="input-group date" id="datepicker1">
                                            <input type="text" class="font_Rabar_028 form-control" id="borndate"
                                                style="border-radius: unset; font-size: 22px; font-weight: 800; color: black; font-family: 'Rabar_028';  width: 125px;">
                                            <span class="input-group-append">
                                                <span class="input-group-text bg-white"
                                                    style="border-radius: 5px 0 0px 5px;
                                border-right: none;">
                                                    <i class="fa fa-calendar"></i>
                                                </span>

                                                <script type="text/javascript">
                                                    $(function() {
                                                        $('#datepicker1').datepicker({
                                                            dateFormat: 'yy-mm-dd' // Year-Month-Day format
                                                        });
                                                    });
                                                </script>

                                        </div>
                                    </td>
                                    <td class="font_Rabar_028"><input type="text" id="work"></td>
                                    <td class="font_Rabar_028"><input type="text" id="workplace"></td>
                                    <td class="font_Rabar_028"><input type="text" id="securityCode"></td>
                                    <script>
                                        $(document).ready(function() {
                                            // Restrict input to numbers only (Arabic and English)
                                            $('#securityCode').on('input', function() {
                                                this.value = this.value.replace(
                                                    /[^\u0660-\u0669\u06F0-\u06F90-9]/g,
                                                    ''); // Allow Arabic and English numerals
                                            });
                                        });
                                    </script>
                                    <td class="font_Rabar_028"><input type="text" id="phone">
                                        <script>
                                            $(document).ready(function() {
                                                // Restrict input to numbers only (Arabic and English)
                                                $('#phone').on('input', function() {
                                                    this.value = this.value.replace(
                                                        /[^\u0660-\u0669\u06F0-\u06F90-9]/g,
                                                        ''); // Allow Arabic and English numerals
                                                });
                                            });
                                        </script>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <button type="button" class="button font_rudawbold" onclick="addRow(this)"><i
                            class="fa-solid fa-circle-plus" style="position: relative;top: 4px;margin-left: 2px"></i>
                        زیادکردن</button>







     var increment = 3;

                function addRow(button) {
                    const container = button.closest('.container');
                    const tableBody = container.querySelector('tbody');
                    const rowCount = tableBody.rows.length + 1;
                    const newRow = document.createElement('tr');

                    newRow.innerHTML = `
        <th scope="row" style="font-size: 23px" class="font_Rabar_028">${rowCount}</th>
        <td>
            <a onclick="deleteRow(this)" class="delete-set">
                <img src="{{ asset('assets/img/delete.svg') }}" alt="Delete icon">
            </a>
        </td>
        <td class="font_Rabar_028"><input type="text" id="familyname" class="familyname"></td>
        <td class="font_Rabar_028">
            <div class="input-group date" id="datepicker${increment}">
                <input type="text" class="font_Rabar_028 form-control" 
                 id="borndate"   style="border-radius: unset; font-size: 22px; font-weight: 800; color: black; font-family: 'Rabar_028'; width: 125px;">
                <span class="input-group-append">
                    <span class="input-group-text bg-white" f
                        style="border-radius: 5px 0 0px 5px; 
    border-right: none;">
                        <i class="fa fa-calendar"></i>
                    </span>
                </span>
            </div>
        </td>
        <td class="font_Rabar_028"><input type="text"></td>
        <td class="font_Rabar_028"><input type="text"></td>
        <td class="font_Rabar_028"><input type="text" oninput="this.value = this.value.replace(/[^0-9\u0660-\u0669\u06F0-\u06F9]/g, '');"></td>
        <td class="font_Rabar_028"><input type="text" id="phone${increment}">
            
         
                                      
                                    
            
            
            </td>
    `;






                    tableBody.appendChild(newRow);

                    // Initialize datepicker after adding the row to the DOM
                    $(`#datepicker${increment}`).datepicker({
                        dateFormat: 'yy-mm-dd' // Year-Month-Day format
                    });
                    // Restrict input to numbers only (Arabic and English)
                    $(`#phone${increment}`).on('input', function() {
                        this.value = this.value.replace(/[^\u0660-\u0669\u06F0-\u06F90-9]/g,
                            ''); // Allow Arabic and English numerals
                    });
                    increment++;
                }


