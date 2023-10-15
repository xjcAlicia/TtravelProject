# 網頁規劃
將既有的網頁，調整成所需的內容與樣式，並加上訂房表單。
* 使用 SASS 預處理器撰寫，將 css 分類，讓網頁後續更好維護
* 在 room 頁面增加訂房表單，使用 ajax 傳送到 process_booking.php，再連接至 mySQL 後端資料庫
* 將 contact 聯絡表單連結 google 表單，並使用 ajax 連結至 google sheet
* 以 php 與 MySQL 製作簡易後台，可以在後台執行新增、修改、刪除、搜尋
## 網頁內容：
1. Home頁面：以整頁畫面去呈現，再加入一些動畫效果，而導覽列則以 hamburger icon 呈現
2. Room頁面：將頁面調整為乾淨利落的視覺，並添加 booking 按鈕，填入資訊後，點擊送出後，即可將資料傳送至後端資料庫
3. Contact頁面：將表單連結 google 表單，點擊送出後，將資料回傳至相對應的 google sheet<br>

[Google Sheet連結](https://docs.google.com/spreadsheets/d/1rNWZ4yJougUZdqlRf3pWIx89TD6GssHWkXyUts-uelE/edit#gid=11445657)
## 後台頁面截圖：
首頁：
![home](https://github.com/xjcAlicia/TtravelProject/blob/main/images/BM/home.jpeg)<br>

會員資料管理頁面：
![member](https://github.com/xjcAlicia/TtravelProject/blob/main/images/BM/member.jpeg)<br>
增加會員頁面：
![member](https://github.com/xjcAlicia/TtravelProject/blob/main/images/BM/member_add.jpeg)<br>
會員編輯頁面：
![member](https://github.com/xjcAlicia/TtravelProject/blob/main/images/BM/member_detail.jpeg)<br>

房間管理頁面：
![member](https://github.com/xjcAlicia/TtravelProject/blob/main/images/BM/room.jpeg)<br>

會員訂房查詢頁面：
![member](https://github.com/xjcAlicia/TtravelProject/blob/main/images/BM/booking.jpeg)<br>
