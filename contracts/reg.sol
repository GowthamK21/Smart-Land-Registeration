pragma solidity 0.4.25;
contract landd
{
    string owner_name;
    string prev_name;
    string village;
    string district;
    string state;
    string survey_num;
    uint patta_num;
    uint no_of_acker;
    //string date;
    constructor() public 
    {
        owner_name="null";
        prev_name="null";
        village="null";
        district="null";
        state="null";
        survey_num="null";
        patta_num=0;
        no_of_acker=0;
    }
    function setDetails(string o,string po,string v,string dis,
    string sta,string s,uint p,uint ac) public
    {
        owner_name=o;
       prev_name=po;
       village=v;
        district=dis;
        state=sta;
        survey_num=s;
        patta_num=p;
        no_of_acker=ac;
    }
    function getDetails() view public returns(string,string,string,string,string,string,uint,uint)
    {
        return (owner_name,prev_name,village,district,state,survey_num,patta_num,no_of_acker);
    }
}