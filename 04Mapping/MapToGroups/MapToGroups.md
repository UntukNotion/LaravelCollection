## CollectionTest.php
```diff
class CollectionTest extends TestCase
{
-     /**
-     * @test
-     */
-    public function collectionManipulation(): void
-    {
-        // membuat collection dari array kosong
-        $collection = collect([]);
-
-        // menambah data menggunakan push()
-        $collection->push(1, 2, 3);
-
-        // mengubah collection menjadi array
-        $toArray = $collection->all();
-
-        self::assertEqualsCanonicalizing([1, 2, 3], $toArray);
-
-        // menghapus nilai paling akhir
-        $toArray = $collection->pop();
-
-        self::assertEquals(3, $toArray);
-        self::assertEqualsCanonicalizing([1, 2], $collection->all());
-    }

+    /**
+     * @test
+     */
+    public function mapToGroups(): void
+    {
+        $collection = collect([
+            [
+                "name" => "Dyone",
+                "department" => "IT"
+            ],
+            [
+                "name" => "Rifky",
+                "department" => "IT"
+            ],
+            [
+                "name" => "Strankers",
+                "department" => "HR"
+            ]
+        ]);
+
+        $result = $collection->mapToGroups(function ($item) {
+            return [$item["department"] => $item["name"]];
+        });
+
+        self::assertEquals([
+            'IT' => collect(["Dyone", "Rifky"]),
+            'HR' => collect(["Strankers"])
+        ], $result->all());
+    }
}
```