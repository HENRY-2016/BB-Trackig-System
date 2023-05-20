
// var BaseUrl = "https://testing.mogahenze.com";
var BaseUrl = "http://127.0.0.1:8000";

var APIImages = BaseUrl+'/images/';
// Total
var APIRoomsTotal = BaseUrl+"/api/total/show/rooms/total";
var APIUsersTotal = BaseUrl+"/api/total/show/users/total";
var APITenantsTotal = BaseUrl+"/api/total/show/tenants/total";
var APIBuildingsTotal = BaseUrl+"/api/total/show/buildings/total";
var APIPaymentsTotal = BaseUrl+"/api/total/show/payments/total";




// Delete APi
var APIDeleteClub = BaseUrl+"/api/delete/club/by/id/";
var APIDeleteDeals = BaseUrl+"/api/delete/deals/by/id/";
var APIDeleteStore = BaseUrl+"/api/delete/store/by/id/";
var APIDeleteNews = BaseUrl+"/api/delete/news/by/id/";
var APIDeleteChats = BaseUrl+"/api/delete/chats/by/id/";
var APIDeleteUsers = BaseUrl+"/api/delete/users/by/id/";
var APIDeleteVendors = BaseUrl+"/api/delete/vendors/by/id/";
var APIDeleteHosting = BaseUrl+"/api/delete/hosting/by/id/";
var APIDeleteCountries = BaseUrl+"/api/delete/countries/by/id/";
var APIDeleteProviders = BaseUrl+"/api/delete/providers/by/id/";
var APIDeleteReferrals = BaseUrl+"/api/delete/referrals/by/id/";
var APIDeleteDeveloper = BaseUrl+"/api/delete/developer/by/id/";
var APIDeleteNewsOrders = BaseUrl+"/api/delete/news/orders/by/id/";
var APIDeleteFunny = BaseUrl+"/api/delete/funny/by/id/";
var APIDeleteTalkTheWalk = BaseUrl+"/api/delete/talk/the/walk/by/id/";

var APIDeleteOrders = BaseUrl+"/api/delete/orders/by/id/";
var APIDeleteNoticeBoard = BaseUrl+"/api/delete/notice/board/by/id/";
var APIDeleteClubMembers = BaseUrl+"/api/delete/club/members/by/id/";
var APIDeleteHolidayHomesFeedBack = BaseUrl+"/api/delete/holiday/homes/feed/back/by/id/";
var APIDeleteHolidayHomes = BaseUrl+"/api/delete/holiday/homes/by/id/";
var APIDeleteHolidayHomesOrders = BaseUrl+"/api/delete/holiday/homes/orders/by/id/";
var APIDeleteClubRenewals = BaseUrl+"/api/delete/club/renewals/by/id/";
var APIDeleteProviderMembers = BaseUrl+"/api/delete/provider/members/by/id/";
var APIDeleteUserLogins = BaseUrl+"/api/delete/user/logins/by/id/";
var APIDeleteClubMemberApplication = BaseUrl+"/api/delete/club/member/application/by/id/";
var APIDeleteAccountStatus= BaseUrl+"/api/delete/club/account/status/by/id/";
var APIDeleteAgencyUser= BaseUrl+"/api/delete/agency/user/by/id/";
var APIDeleteAgencyCheckInOut= BaseUrl+"/api/delete/agency/check/in/out/by/id/";
var APIDeleteAgencyProviders = BaseUrl+"/api/delete/agency/providers/by/id/";
var APIDeleteAgencyJobs = BaseUrl+"/api/delete/agency/jobs/by/id/";
var APIDeleteAgencyProvidersServices = BaseUrl+"/api/delete/agency/providers/services/by/id/";
var APIDeleteClubCredits = BaseUrl+"/api/delete/club/credits/by/id/";
var APIDeleteHealthUsersAccounts = BaseUrl+"/api/delete/health/users/accounts/by/id/";
var APIDeleteHealthInsurance = BaseUrl+"/api/delete/health/insurance/by/id/";
var APIDeleteHealthHospitals = BaseUrl+"/api/delete/health/hospitals/by/id/";
var APIDeleteHealthRequests = BaseUrl+"/api/delete/health/requests/by/id/";
var APIDeleteTaxiBodaOrders = BaseUrl+"/api/delete/tc/taxi/boda/by/id/";

// Others
var APIAppDashboardData = BaseUrl+"/api/list/all/dashboard/google/play/app/statics";

var APIGetTcNumber = BaseUrl+"/api/club/member/get/tc/number/by/name/";
var APIGetProviderTcNumber = BaseUrl+"/api/provider/get/tc/number/by/name/";
var APIGetAgencyNumber = BaseUrl+"/api/agency/get/number/by/name/";
var APIGetAgencyProviderNumber = BaseUrl+"/api/agency/provider/number/by/name/";

// On Searching
var APIClubMemberDetailsByName = BaseUrl+"/api/search/club/member/details/by/name/";
var APIClubMemberDetailsByNumber = BaseUrl+"/api/search/club/member/details/by/number/";
var APILogInsMemberDetailsByName = BaseUrl+"/api/search/log/ins/member/details/by/name/";
var APILogInsMemberDetailsByNumber = BaseUrl+"/api/search/log/ins/member/details/by/number/";
var APICreditMemberDetailsByName = BaseUrl+"/api/search/credit/member/details/by/name/";
var APICreditMemberDetailsByNumber = BaseUrl+"/api/search/credit/member/details/by/number/";
var APIProviderMemberDetailsByName = BaseUrl+"/api/search/provider/member/details/by/name/";
var APIProviderMemberDetailsByNumber = BaseUrl+"/api/search/provider/member/details/by/number/";
var APIProviderDetailsByName = BaseUrl+"/api/search/provider/details/by/name/";
var APIProviderDetailsByNumber = BaseUrl+"/api/search/provider/details/by/number/";
var APIClubRenewalsDetailsByName = BaseUrl+"/api/search/club/renewals/details/by/name/";
var APIClubRenewalsDetailsByNumber = BaseUrl+"/api/search/club/renewals/details/by/number/";
var APIAccountStatusDetailsByName = BaseUrl+"/api/search/account/status/details/by/name/";
var APIAccountStatusDetailsByNumber = BaseUrl+"/api/search/account/status/details/by/number/";
var APIAgencyUserDetailsByName = BaseUrl+"/api/search/agency/user/details/by/name/";
var APIAgencyUserDetailsByNumber = BaseUrl+"/api/search/agency/user/details/by/number/";
var APIAgencyProviderDetailsByName = BaseUrl+"/api/search/agency/provider/details/by/name/";
var APIAgencyProviderDetailsByNumber = BaseUrl+"/api/search/agency/provider/details/by/number/";
var APIAgencyCheckInOutDetailsByName = BaseUrl+"/api/search/agency/check/in/out/details/by/name/";
var APIAgencyCheckInOutDetailsByNumber = BaseUrl+"/api/search/agency/check/in/out/details/by/number/";

//  21-03-2023
var APIVendorsItems = BaseUrl+"/api/vendors/list/shop/items/by/shop/";
var APIOrderDetails = BaseUrl+"/api/store/orders/list/customer/order/details/by/id/";


function OloadInitiApplication (){display_Date ();}
function display_Date ()
{

    let today = new Date();
    let date = today.getDate()+ ' / ' +(today.getMonth()+1)+' / ' +today.getFullYear() ;
    let time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    const weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
    let day = weekday[today.getDay()];

    date_and_time = day+ " " +date+" " + " "+time;
    document.getElementById('date-span').innerText = date_and_time;
}

function showTcClientsDiv ()
{
    document.getElementById("btn-1").style.background = "black";
    document.getElementById("lab-1").style.color = "white";
    document.getElementById("btn-2").style.background = "white";
    document.getElementById("lab-2").style.color = "blue";
    document.getElementById("btn-3").style.background = "white";
    document.getElementById("lab-3").style.color = "blue";
    document.getElementById("btn-4").style.background = "white";
    document.getElementById("lab-4").style.color = "blue";

    document.getElementById('Tc-Apps-log-in-div').style.display = 'none';
    document.getElementById('Tc-health-log-in-div').style.display = 'none';
    document.getElementById('Tc-log-in-div').style.display = 'none';
    document.getElementById('Tc-clients-div').style.display = 'block';
}
function showTcVendorsLogInDiv ()
{
    document.getElementById("btn-2").style.background = "black";
    document.getElementById("lab-2").style.color = "white";
    document.getElementById("btn-1").style.background = "white";
    document.getElementById("lab-1").style.color = "blue";
    document.getElementById("btn-3").style.background = "white";
    document.getElementById("lab-3").style.color = "blue";
    document.getElementById("btn-4").style.background = "white";
    document.getElementById("lab-4").style.color = "blue";


    document.getElementById('Tc-clients-div').style.display = 'none';
    document.getElementById('Tc-log-in-div').style.display = 'none';
    document.getElementById('Tc-health-log-in-div').style.display = 'none';
    document.getElementById('Tc-Apps-log-in-div').style.display = 'block';
}
function showTcHealthLogInDiv ()
{
    document.getElementById("btn-3").style.background = "black";
    document.getElementById("lab-3").style.color = "white";
    document.getElementById("btn-1").style.background = "white";
    document.getElementById("lab-1").style.color = "blue";
    document.getElementById("btn-2").style.background = "white";
    document.getElementById("lab-2").style.color = "blue";
    document.getElementById("btn-4").style.background = "white";
    document.getElementById("lab-4").style.color = "blue";

    document.getElementById('Tc-Apps-log-in-div').style.display = 'none';
    document.getElementById('Tc-clients-div').style.display = 'none';
    document.getElementById('Tc-log-in-div').style.display = 'none';
    document.getElementById('Tc-health-log-in-div').style.display = 'block';
}
function showTcLogInDiv ()
{
    document.getElementById("btn-4").style.background = "black";
    document.getElementById("lab-4").style.color = "white";
    document.getElementById("btn-1").style.background = "white";
    document.getElementById("lab-1").style.color = "blue";
    document.getElementById("btn-3").style.background = "white";
    document.getElementById("lab-3").style.color = "blue";
    document.getElementById("btn-2").style.background = "white";
    document.getElementById("lab-2").style.color = "blue";

    document.getElementById('Tc-Apps-log-in-div').style.display = 'none';
    document.getElementById('Tc-health-log-in-div').style.display = 'none';
    document.getElementById('Tc-clients-div').style.display = 'none';
    document.getElementById('Tc-log-in-div').style.display = 'block';
}

function Get_Over_Roll_Total (APICall,HtmlId)
{
    $.ajax({
            url:APICall,
            type:'get',
            dataType:'JSON',
            error: function (){alert("Request Unsuccessful")},
            success: function (response)
            {document.getElementById(HtmlId).innerHTML = response}
            });
}

function openDeleteModalWindow (){document.getElementById("delete-Modal").style.display = "block";}
function closeDeleteModalWindow (){document.getElementById("delete-Modal").style.display = "none";location.reload();}

function closeConfirmModalWindow (){document.getElementById("myModal").style.display = "none";}
function showConfirmModalWindow (Id)
{
    document.getElementById("myModal").style.display = "block";
    document.getElementById("id-value-input").value = Id;
}

function deleteSelectedRecord (APICall)
{
    closeConfirmModalWindow ();
    let Id = document.getElementById("id-value-input").value;
    $.ajax({
        url:APICall+Id,
        type:'post',
        error: function (){alert("Request Unsuccessful")},
        success: function (response)
        {
            document.getElementById("delete-success").innerHTML = response;
            openDeleteModalWindow();
        }
        });
}

function Show_Dashboard_App_Status (APICall,InstallsId,UnInstallsId,ActiveId)
{
    $.ajax({
            url:APICall,
            type:'get',
            dataType:'JSON',
            error: function ()
            {
                alert("Request Unsuccessful")
            },
            success: function (response)
            {
                let results = response;

                let installs = results[0].Installs
                let uninstalls = results[0].Uninstalls
                let devices  = results[0].Devices

                document.getElementById(InstallsId).innerHTML = installs
                document.getElementById(UnInstallsId).innerHTML = uninstalls
                document.getElementById(ActiveId).innerHTML = devices

            }
            });
}

function getClubMemberTcNumberByName (APICall,NameInput,HtmlInput)
{
    let SelectedName = document.getElementById(NameInput).value;
    $.ajax({
            url:APICall+SelectedName,
            type:'get',
            dataType:'JSON',
            error: function (){alert("Request Unsuccessful")},
            success: function (response)
            {
                let results = response;
                let TcNumber = results[0].CardNo
                document.getElementById(HtmlInput).value = TcNumber; 
            }
            });
}

function getClubMemberTcNumberByName2 (APICall,NameInput,HtmlInput)
{
    let SelectedName = document.getElementById(NameInput).value;
    $.ajax({
            url:APICall+SelectedName,
            type:'get',
            dataType:'JSON',
            error: function (){alert("Request Unsuccessful")},
            success: function (response)
            {
                let results = response;
                let TcNumber = results[0].AgencyNumber
                document.getElementById(HtmlInput).value = TcNumber; 
            }
            });
}



// ===============================================
// ================================================

function DisplayUploadedImage ( event, id )
{   
    let image = document.getElementById(id);
	image.src = URL.createObjectURL(event.target.files[0]);
}

function Show_Dashboard_Total (APICall,HtmlId)
{
    $.ajax({
            url:APICall,
            type:'get',
            dataType:'JSON',
            error: function ()
            {
                alert("Request Unsuccessful")
            },
            success: function (response)
            {
                let results = response;
                document.getElementById(HtmlId).innerHTML = results;
            }
            });
}
function PrintDocument(divId,title) 
{

    let myWindow = window.open('', 'PRINT', 'height=650,width=900,top=100,left=150');
    myWindow.document.write(`<html><head><title>${title}</title>`);
    myWindow.document.write('</head><body >');
    myWindow.document.write(document.getElementById(divId).innerHTML);
    myWindow.document.write('</body></html>');

    myWindow.document.close(); // necessary for IE >= 10
    myWindow.focus(); // necessary for IE >= 10*/

    myWindow.print();
    myWindow.close();

    return true;
}