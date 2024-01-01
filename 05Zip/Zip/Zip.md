## CollectionTest.php
```diff
class CollectionTest extends TestCase
{
-    /**
-     * @test
-     */
-    public function mapToGroups(): void
-    {
-        $collection = collect([
-            [
-                "name" => "Dyone",
-                "department" => "IT"
-            ],
-            [
-                "name" => "Rifky",
-                "department" => "IT"
-            ],
-            [
-                "name" => "Strankers",
-                "department" => "HR"
-            ]
-        ]);
-
-        $result = $collection->mapToGroups(function ($item) {
-            return [$item["department"] => $item["name"]];
-        });
-
-        self::assertEquals([
-            'IT' => collect(["Dyone", "Rifky"]),
-            'HR' => collect(["Strankers"])
-        ], $result->all());
-    }

+    /**
+     * @test
+     */
+    public function zip(): void
+    {
+        $collection1 = collect([1, 2, 3]);
+        $collection2 = collect([4, 5, 6]);
+
+        $collection3 = $collection1->zip($collection2);
+
+        self::assertEquals([
+            collect([1, 4]),
+            collect([2, 5]),
+            collect([3, 6]),
+        ], $collection3->all());
+    }
}
```